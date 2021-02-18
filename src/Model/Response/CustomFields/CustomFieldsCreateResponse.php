<?php

/**
 * PHP version 7.3
 *
 * @category CustomFieldsCreateResponse
 * @package  RetailCrm\Api\Model\Response\CustomFields
 */

namespace RetailCrm\Api\Model\Response\CustomFields;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CustomFieldsCreateResponse
 *
 * @category CustomFieldsCreateResponse
 * @package  RetailCrm\Api\Model\Response\CustomFields
 */
class CustomFieldsCreateResponse extends SuccessResponse
{
    /**
     * @var string
     * @SerializedName("code")
     */
    public $code;
}
