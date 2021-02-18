<?php

/**
 * PHP version 7.3
 *
 * @category SerializedCustomDictionaryElement
 * @package  RetailCrm\Api\Model\Entity\CustomFields
 */

namespace RetailCrm\Api\Model\Entity\CustomFields;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class SerializedCustomDictionaryElement
 *
 * @category SerializedCustomDictionaryElement
 * @package  RetailCrm\Api\Model\Entity\CustomFields
 */
class SerializedCustomDictionaryElement
{
    /**
     * @var string
     * @SerializedName("name")
     */
    public $name;

    /**
     * @var string
     * @SerializedName("code")
     */
    public $code;

    /**
     * @var int
     * @SerializedName("ordering")
     */
    public $ordering;
}
