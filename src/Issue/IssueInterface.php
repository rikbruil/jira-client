<?php

namespace Rb\JiraClient\Issue;

use Rb\JiraClient\ResourceInterface;

interface IssueInterface extends ResourceInterface
{
    /**
     * Return the fields for this issue.
     *
     * @return IssueFieldsInterface
     */
    public function getFields();

    /**
     * Returns the key of this issue.
     *
     * @return string
     */
    public function getKey();
}
