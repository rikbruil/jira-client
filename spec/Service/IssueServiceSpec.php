<?php

namespace spec\Rb\JiraClient\Service;

use GuzzleHttp\ClientInterface;
use JMS\Serializer\SerializerInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Rb\JiraClient\Client;
use Rb\JiraClient\Credentials\CredentialsInterface;
use Rb\JiraClient\Service\IssueService;

class IssueServiceSpec extends ObjectBehavior
{
    function let(CredentialsInterface $credentials, SerializerInterface $serializer, ClientInterface $client, ResponseInterface $response, StreamInterface $stream)
    {
        $response->getBody()->willReturn($stream);

        $this->beConstructedWith($credentials, $serializer, $client);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(IssueService::class);
        $this->shouldHaveType(Client::class);
    }

    function it_should_get_issue(ClientInterface $client, SerializerInterface $serializer, ResponseInterface $response, StreamInterface $stream)
    {
        $className = 'className';
        $id = 'issue_id';
        $contents = 'contents';
        $uri = Client::API_URI . IssueService::URI . '/' . $id;
        $result = [];

        $stream->getContents()->willReturn($contents);
        $client->request('GET', $uri, Argument::any())->willReturn($response);

        $serializer->deserialize($contents, $className, 'json')->willReturn($result);

        $this->getIssue($id, $className)->shouldReturn($result);
    }
}
