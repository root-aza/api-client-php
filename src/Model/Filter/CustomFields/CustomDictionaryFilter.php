<?php

/**
 * PHP version 7.3
 *
 * @category CustomDictionaryFilter
 * @package  RetailCrm\Api\Model\Filter\CustomFields
 */

namespace RetailCrm\Api\Model\Filter\CustomFields;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class CustomDictionaryFilter
 *
 * @category CustomDictionaryFilter
 * @package  RetailCrm\Api\Model\Filter\CustomFields
 */
class CustomDictionaryFilter
{
    /**
     * @var string
     *
     * @SerializedName("name")
     */
    public $name;

    /**
     * @var string
     *
     * @SerializedName("code")
     */
    public $code;
}
