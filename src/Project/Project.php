<?php

namespace Rb\JiraClient\Project;

use JMS\Serializer\Annotation as Serializer;
use Rb\JiraClient\AbstractResource;

/**
 * @Serializer\ExclusionPolicy("all")
 */
class Project extends AbstractResource implements ProjectInterface
{
    /**
     * @Serializer\Expose()
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $name;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function getKey()
    {
        return $this->key;
    }
}
