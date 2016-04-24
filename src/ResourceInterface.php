<?php

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
