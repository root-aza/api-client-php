<?php

/**
 * PHP version 7.3
 *
 * @category CustomDictionaryGetResponse
 * @package  RetailCrm\Api\Model\Response\CustomFields
 */

namespace RetailCrm\Api\Model\Response\CustomFields;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CustomDictionaryGetResponse
 *
 * @category CustomDictionaryGetResponse
 * @package  RetailCrm\Api\Model\Response\CustomFields
 */
class CustomDictionaryGetResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\CustomFields\CustomDictionary
     *
     * @SerializedName("customDictionary")
     */
    public $customDictionary;
}
