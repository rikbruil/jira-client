<?php

namespace Rb\JiraClient;

use GuzzleHttp\ClientInterface;
use JMS\Serializer\SerializerInterface;
use Rb\JiraClient\Credentials\CredentialsInterface;

class Client
{
    const API_URI = '/rest/api/2';

    /**
     * @var CredentialsInterface
     */
    private $credentials;

    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @param CredentialsInterface $credentials
     * @param SerializerInterface  $serializer
     * @param ClientInterface      $client
     */
    public function __construct(CredentialsInterface $credentials, SerializerInterface $serializer, ClientInterface $client = null)
    {
        if (is_null($client)) {
            $client = new \GuzzleHttp\Client();
        }

        $this->serializer  = $serializer;
        $this->credentials = $credentials;
        $this->client      = $client;
    }

    /**
     * @param string $method
     * @param string $uri
     * @param array  $options
     *
     * @return string
     */
    public function request($method, $uri, $options = [])
    {
        $response = $this->client->request($method, self::API_URI . $uri, array_merge(
            $this->getDefaultRequestOptions(),
            $options
        ));

        return $response->getBody()->getContents();
    }

    /**
     * @return array
     */
    public function getDefaultRequestOptions()
    {
        $credentials = $this->credentials;

        return [
            'base_uri' => $credentials->getDomain(),
            'auth' => [$credentials->getUser(), $credentials->getPassword()],
        ];
    }

    /**
     * @param string $data
     * @param string $type
     *
     * @return mixed
     */
    public function deserialize($data, $type)
    {
        return $this->serializer->deserialize($data, $type, 'json');
    }
}
