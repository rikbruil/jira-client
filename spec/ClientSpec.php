<?php

namespace spec\Rb\JiraClient;

use GuzzleHttp\ClientInterface;
use JMS\Serializer\SerializerInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Rb\JiraClient\Client;
use Rb\JiraClient\Credentials\CredentialsInterface;

class ClientSpec extends ObjectBehavior
{
    const HOST = 'foo.bar';
    const USER = 'user';
    const PASS = 'password';

    function let(CredentialsInterface $credentials, SerializerInterface $serializer, ClientInterface $client)
    {
        $credentials->getDomain()->willReturn(self::HOST);
        $credentials->getUser()->willReturn(self::USER);
        $credentials->getPassword()->willReturn(self::PASS);

        $this->beConstructedWith($credentials, $serializer, $client);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Client::class);
    }

    function it_should_return_default_request_options()
    {
        $options = $this->getDefaultRequestOptions();

        $options->shouldEqual([
            'base_uri' => self::HOST,
            'auth' => [self::USER, self::PASS],
        ]);
    }

    function it_should_make_request(ClientInterface $client, ResponseInterface $response, StreamInterface $stream)
    {
        $method = 'GET';
        $uri = '/foo';
        $contents = 'contents';

        $stream->getContents()->willReturn($contents);
        $response->getBody()->willReturn($stream);

        $client->request($method, Client::API_URI . $uri, Argument::any())->willReturn($response);

        $this->request($method, $uri)->shouldReturn($contents);
    }

    function it_should_deserialize_response_data(SerializerInterface $serializer, ResponseInterface $response, StreamInterface $stream)
    {
        $contents = '{}';
        $className = 'Foo';
        $output = [];

        $stream->getContents()->willReturn($contents);
        $response->getBody()->willReturn($stream);

        $serializer->deserialize($contents, $className, 'json')->willReturn($output);

        $this->deserialize($contents, $className)->shouldReturn($output);
    }
}
