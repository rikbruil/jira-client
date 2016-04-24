<?php

/*
 * This file is part of the Jira Client library.
 *
 * (c) Rik Bruil <rikbruil@users.noreply.github.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the LICENSE file.
 */

namespace Rb\JiraClient\Project;

use Rb\JiraClient\ResourceInterface;

interface ProjectInterface extends ResourceInterface
{
    /**
     * Return the project name.
     *
     * @return string
     */
    public function getName();

    /**
     * Returns the key of this project.
     *
     * @return string
     */
    public function getKey();
}
