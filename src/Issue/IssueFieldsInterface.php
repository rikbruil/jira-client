<?php

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
