<?php

/**
 * PHP version 7.3
 *
 * @category CustomField
 * @package  RetailCrm\Api\Model\Entity\CustomFields
 */

namespace RetailCrm\Api\Model\Entity\CustomFields;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class CustomField
 *
 * @category CustomField
 * @package  RetailCrm\Api\Model\Entity\CustomFields
 */
class CustomField
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
     * @var bool
     * @SerializedName("required")
     */
    public $required;

    /**
     * @var bool
     * @SerializedName("inFilter")
     */
    public $inFilter;

    /**
     * @var bool
     * @SerializedName("inList")
     */
    public $inList;

    /**
     * @var bool
     * @SerializedName("inGroupActions")
     */
    public $inGroupActions;

    /**
     * @var string
     * @SerializedName("type")
     */
    public $type;

    /**
     * @var string
     * @SerializedName("entity")
     */
    public $entity;

    /**
     * @var string
     * @SerializedName("default")
     */
    public $default;

    /**
     * @var int
     * @SerializedName("ordering")
     */
    public $ordering;

    /**
     * @var string
     * @SerializedName("displayArea")
     */
    public $displayArea;

    /**
     * @var string
     * @SerializedName("viewMode")
     */
    public $viewMode;

    /**
     * @var string
     * @SerializedName("dictionary")
     */
    public $dictionary;
}
