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
