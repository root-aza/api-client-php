<?php

/**
 * PHP version 7.3
 *
 * @category CustomDictionaryCreateResponse
 * @package  RetailCrm\Api\Model\Response\CustomFields
 */

namespace RetailCrm\Api\Model\Response\CustomFields;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CustomDictionaryCreateResponse
 *
 * @category CustomDictionaryCreateResponse
 * @package  RetailCrm\Api\Model\Response\CustomFields
 */
class CustomDictionaryCreateResponse extends SuccessResponse
{
    /**
     * @var string
     * @SerializedName("code")
     */
    public $code;
}
