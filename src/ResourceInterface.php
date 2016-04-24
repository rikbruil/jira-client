<?php

/*
 * This file is part of the Jira Client library.
 *
 * (c) Rik Bruil <rikbruil@users.noreply.github.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the LICENSE file.
 */

namespace Rb\JiraClient;

interface ResourceInterface
{
    /**
     * Returns JIRA resource ID.
     *
     * @return int
     */
    public function getId();

    /**
     * Return the URL for this resource.
     *
     * @return string
     */
    public function getUrl();
}
