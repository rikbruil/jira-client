<?php

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
