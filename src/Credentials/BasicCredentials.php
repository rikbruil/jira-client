<?php

/*
 * This file is part of the Jira Client library.
 *
 * (c) Rik Bruil <rikbruil@users.noreply.github.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the LICENSE file.
 */

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
