<?php

/**
 * PHP version 7.3
 *
 * @category CustomDictionaryCreateRequest
 * @package  RetailCrm\Api\Model\Request\CustomFields
 */

namespace RetailCrm\Api\Model\Request\CustomFields;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CustomDictionaryCreateRequest
 *
 * @category CustomDictionaryCreateRequest
 * @package  RetailCrm\Api\Model\Request\CustomFields
 */
class CustomDictionaryCreateRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\CustomFields\CustomDictionary
     *
     * @SerializedName("customDictionary")
     */
    public $customDictionary;
}
