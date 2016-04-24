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
use Rb\JiraClient\Service\ProjectService;

class ProjectServiceSpec extends ObjectBehavior
{
    function let(CredentialsInterface $credentials, SerializerInterface $serializer, ClientInterface $client, ResponseInterface $response, StreamInterface $stream)
    {
        $response->getBody()->willReturn($stream);

        $this->beConstructedWith($credentials, $serializer, $client);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(ProjectService::class);
        $this->shouldHaveType(Client::class);
    }

    function it_should_get_single_project(ClientInterface $client, SerializerInterface $serializer, ResponseInterface $response, StreamInterface $stream)
    {
        $className = 'className';
        $id = 'project_id';
        $contents = 'contents';
        $uri = Client::API_URI . ProjectService::URI . '/' . $id;
        $result = [];

        $stream->getContents()->willReturn($contents);
        $client->request('GET', $uri, Argument::any())->willReturn($response);

        $serializer->deserialize($contents, $className, 'json')->willReturn($result);

        $this->getProject($id, $className)->shouldReturn($result);
    }

    function it_should_get_all_projects(ClientInterface $client, SerializerInterface $serializer, ResponseInterface $response, StreamInterface $stream)
    {
        $className = 'className';
        $contents = 'contents';
        $uri = Client::API_URI . ProjectService::URI;
        $result = [];

        $stream->getContents()->willReturn($contents);
        $client->request('GET', $uri, Argument::any())->willReturn($response);

        $serializer->deserialize($contents, 'array<'.$className.'>', 'json')->willReturn($result);

        $this->getProjects($className)->shouldReturn($result);
    }
}
