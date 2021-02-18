<?php

/**
 * PHP version 7.3
 *
 * @category CustomFieldFilter
 * @package  RetailCrm\Api\Model\Filter\CustomFields
 */

namespace RetailCrm\Api\Model\Filter\CustomFields;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class CustomFieldFilter
 *
 * @category CustomFieldFilter
 * @package  RetailCrm\Api\Model\Filter\CustomFields
 */
class CustomFieldFilter
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

    /**
     * @var string[]
     *
     * @SerializedName("type")
     */
    public $type;

    /**
     * @var string[]
     *
     * @SerializedName("viewMode")
     */
    public $viewMode;

    /**
     * @var string[]
     *
     * @SerializedName("displayArea")
     */
    public $displayArea;

    /**
     * @var string
     *
     * @SerializedName("entity")
     */
    public $entity;
}
