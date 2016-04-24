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

use JMS\Serializer\Annotation as Serializer;
use Rb\JiraClient\Project\ProjectInterface;

/**
 * @Serializer\ExclusionPolicy("all")
 */
class IssueFields implements IssueFieldsInterface
{
    /**
     * @Serializer\Expose()
     * @Serializer\Type("Rb\JiraClient\Project\Project")
     *
     * @var ProjectInterface
     */
    private $project;

    /**
     * @Serializer\Expose()
     * @Serializer\Type("string")
     
     * @var string
     */
    private $description;

    /**
     * @Serializer\Expose()
     * @Serializer\Type("array")
     * @Serializer\SerializedName("comment")
     *
     * @var array
     */
    private $comments;

    /**
     * {@inheritdoc}
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * {@inheritdoc}
     */
    public function getComments()
    {
        return $this->comments;
    }
}
