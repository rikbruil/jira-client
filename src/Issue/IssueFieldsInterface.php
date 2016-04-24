<?php

/*
 * This file is part of the Jira Client library.
 *
 * (c) Rik Bruil <rikbruil@users.noreply.github.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the LICENSE file.
 */

namespace Rb\JiraClient\Issue;

use Rb\JiraClient\Project\ProjectInterface;

interface IssueFieldsInterface
{
    /**
     * Get the project info for this issue.
     *
     * @return ProjectInterface
     */
    public function getProject();

    /**
     * Get the issue description.
     *
     * @return string
     */
    public function getDescription();

    /**
     * Get comments for this issue.
     *
     * @return array
     */
    public function getComments();
}
