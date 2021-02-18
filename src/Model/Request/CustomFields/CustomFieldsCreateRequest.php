<?php

/**
 * PHP version 7.3
 *
 * @category CustomFieldsCreateRequest
 * @package  RetailCrm\Api\Model\Request\CustomFields
 */

namespace RetailCrm\Api\Model\Request\CustomFields;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CustomFieldsCreateRequest
 *
 * @category CustomFieldsCreateRequest
 * @package  RetailCrm\Api\Model\Request\CustomFields
 */
class CustomFieldsCreateRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\CustomFields\CustomField
     *
     * @SerializedName("customField")
     */
    public $customField;
}
