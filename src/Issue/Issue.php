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
use Rb\JiraClient\AbstractResource;

/**
 * @Serializer\ExclusionPolicy("all")
 */
class Issue extends AbstractResource implements IssueInterface
{
    /**
     * @Serializer\Expose()
     * @Serializer\Type("Rb\JiraClient\Issue\IssueFields")
     *
     * @var IssueFieldsInterface
     */
    private $fields;

    /**
     * @Serializer\Expose()
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $key;

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * {@inheritdoc}
     */
    public function getKey()
    {
        return $this->key;
    }
}
