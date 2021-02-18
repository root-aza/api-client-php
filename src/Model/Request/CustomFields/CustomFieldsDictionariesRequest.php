<?php

/**
 * PHP version 7.3
 *
 * @category CustomFieldsDictionariesRequest
 * @package  RetailCrm\Api\Model\Request\CustomFields
 */

namespace RetailCrm\Api\Model\Request\CustomFields;

use RetailCrm\Api\Interfaces\RequestInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;

/**
 * Class CustomFieldsDictionariesRequest
 *
 * @category CustomFieldsDictionariesRequest
 * @package  RetailCrm\Api\Model\Request\CustomFields
 */
class CustomFieldsDictionariesRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\CustomFields\CustomDictionaryFilter
     *
     * @SerializedName("filter")
     */
    public $filter;
}
