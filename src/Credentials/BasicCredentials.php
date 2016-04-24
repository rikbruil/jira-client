<?php

namespace Rb\JiraClient\Credentials;

class BasicCredentials implements CredentialsInterface
{
    /**
     * @var string
     */
    private $domain;

    /**
     * @var string
     */
    private $user;

    /**
     * @var string
     */
    private $password;

    /**
     * @param string $domain
     * @param string $user
     * @param string $password
     */
    public function __construct($domain, $user, $password)
    {
        $this->domain   = $domain;
        $this->user     = $user;
        $this->password = $password;
    }

    /**
     * {@inheritdoc}
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * {@inheritdoc}
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * {@inheritdoc}
     */
    public function getPassword()
    {
        return $this->password;
    }
}
