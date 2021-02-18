<?php

/**
 * PHP version 7.3
 *
 * @category CustomDictionary
 * @package  RetailCrm\Api\Model\Entity\CustomFields
 */

namespace RetailCrm\Api\Model\Entity\CustomFields;

use RetailCrm\Api\Model\Entity\Entity;
use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class CustomDictionary
 *
 * @category CustomDictionary
 * @package  RetailCrm\Api\Model\Entity\CustomFields
 */
class CustomDictionary implements Entity
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
     * @var \RetailCrm\Api\Model\Entity\CustomFields\SerializedCustomDictionaryElement
     *
     * @SerializedName("elements")
     */
    public $elements;
}
