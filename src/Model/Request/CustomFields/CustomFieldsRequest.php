<?php

/**
 * PHP version 7.3
 *
 * @category CustomFieldsRequest
 * @package  RetailCrm\Api\Model\Request\CustomFields
 */

namespace RetailCrm\Api\Model\Request\CustomFields;

use RetailCrm\Api\Interfaces\RequestInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;

/**
 * Class CustomFieldsRequest
 *
 * @category CustomFieldsRequest
 * @package  RetailCrm\Api\Model\Request\CustomFields
 */
class CustomFieldsRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\CustomFields\CustomFieldFilter
     *
     * @SerializedName("filter")
     */
    public $filter;
}
