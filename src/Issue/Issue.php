<?php

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
