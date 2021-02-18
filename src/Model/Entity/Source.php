<?php

/**
 * PHP version 7.3
 *
 * @category Source
 * @package  RetailCrm\Api\Model\Entity
 */

namespace RetailCrm\Api\Model\Entity;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class Source
 *
 * @category Source
 * @package  RetailCrm\Api\Model\Entity
 */
class Source
{
    /**
     * @var string
     * @SerializedName("source")
     */
    public $source;

    /**
     * @var string
     * @SerializedName("medium")
     */
    public $medium;

    /**
     * @var string
     * @SerializedName("campaign")
     */
    public $campaign;

    /**
     * @var string
     * @SerializedName("keyword")
     */
    public $keyword;

    /**
     * @var string
     * @SerializedName("content")
     */
    public $content;
}
