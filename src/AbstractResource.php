<?php

namespace Rb\JiraClient;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\ExclusionPolicy("all")
 */
abstract class AbstractResource implements ResourceInterface
{
    /**
     * @Serializer\Expose()
     * @Serializer\Type("integer")
     *
     * @var int
     */
    private $id;

    /**
     * @Serializer\Expose()
     * @Serializer\Type("string")
     * @Serializer\SerializedName("self")
     *
     * @var string
     */
    private $url;

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        return $this->url;
    }
}
