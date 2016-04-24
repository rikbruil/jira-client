<?php

namespace Rb\JiraClient\Credentials;

interface CredentialsInterface
{
    /**
     * Get the JIRA domain to use.
     *
     * @return string
     */
    public function getDomain();

    /**
     * Get the username to be used for authentication.
     *
     * @return string
     */
    public function getUser();

    /**
     * Get the password to be used for authentication.
     *
     * @return string
     */
    public function getPassword();
}
