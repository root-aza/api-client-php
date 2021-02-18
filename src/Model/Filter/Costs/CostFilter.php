<?php

/**
 * PHP version 7.3
 *
 * @category CostFilter
 * @package  RetailCrm\Api\Model\Filter\Costs
 */

namespace RetailCrm\Api\Model\Filter\Costs;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class CostFilter
 *
 * @category CostFilter
 * @package  RetailCrm\Api\Model\Filter\Costs
 */
class CostFilter
{
    /**
     * @var string
     *
     * @SerializedName("minSumm")
     */
    public $minSumm;

    /**
     * @var string
     *
     * @SerializedName("maxSumm")
     */
    public $maxSumm;

    /**
     * @var string
     *
     * @SerializedName("orderNumber")
     */
    public $orderNumber;

    /**
     * @var string
     *
     * @SerializedName("comment")
     */
    public $comment;

    /**
     * @var int[]
     *
     * @SerializedName("ids")
     */
    public $ids;

    /**
     * @var string[]
     *
     * @SerializedName("sites")
     */
    public $sites;

    /**
     * @var int[]
     *
     * @SerializedName("createdBy")
     */
    public $createdBy;

    /**
     * @var string[]
     *
     * @SerializedName("costGroups")
     */
    public $costGroups;

    /**
     * @var string[]
     *
     * @SerializedName("costItems")
     */
    public $costItems;

    /**
     * @var int[]
     *
     * @SerializedName("users")
     */
    public $users;

    /**
     * @var string[]
     *
     * @SerializedName("dateFrom")
     */
    public $dateFrom;

    /**
     * @var string[]
     *
     * @SerializedName("dateTo")
     */
    public $dateTo;

    /**
     * @var string[]
     *
     * @SerializedName("createdAtFrom")
     */
    public $createdAtFrom;

    /**
     * @var string[]
     *
     * @SerializedName("createdAtTo")
     */
    public $createdAtTo;

    /**
     * @var int[]
     *
     * @SerializedName("orderIds")
     */
    public $orderIds;

    /**
     * @var string[]
     *
     * @SerializedName("orderExternalIds")
     */
    public $orderExternalIds;
}
