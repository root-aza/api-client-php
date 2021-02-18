<?php

/**
 * PHP version 7.3
 *
 * @category CustomerNoteFilter
 * @package  RetailCrm\Api\Model\Filter\Customers
 */

namespace RetailCrm\Api\Model\Filter\Customers;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class CustomerNoteFilter
 *
 * @category CustomerNoteFilter
 * @package  RetailCrm\Api\Model\Filter\Customers
 */
class CustomerNoteFilter
{
    /**
     * @var int[]
     *
     * @SerializedName("ids")
     */
    public $ids;

    /**
     * @var int[]
     *
     * @SerializedName("customerIds")
     */
    public $customerIds;

    /**
     * @var string[]
     *
     * @SerializedName("customerExternalIds")
     */
    public $customerExternalIds;

    /**
     * @var int[]
     *
     * @SerializedName("managerIds")
     */
    public $managerIds;

    /**
     * @var string
     *
     * @SerializedName("text")
     */
    public $text;

    /**
     * @var string
     *
     * @SerializedName("createdAtFrom")
     */
    public $createdAtFrom;

    /**
     * @var string
     *
     * @SerializedName("createdAtTo")
     */
    public $createdAtTo;
}
