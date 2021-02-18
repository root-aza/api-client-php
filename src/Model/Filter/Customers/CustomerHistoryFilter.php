<?php

/**
 * PHP version 7.3
 *
 * @category CustomerHistoryFilter
 * @package  RetailCrm\Api\Model\Filter\Customers
 */

namespace RetailCrm\Api\Model\Filter\Customers;

use DateTime;
use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class CustomerHistoryFilter
 *
 * @category CustomerHistoryFilter
 * @package  RetailCrm\Api\Model\Filter\Customers
 */
class CustomerHistoryFilter
{
    /**
     * @var int
     *
     * @SerializedName("customerId")
     */
    public $customerId;

    /**
     * @var int
     *
     * @SerializedName("sinceId")
     */
    public $sinceId;

    /**
     * @var string
     *
     * @SerializedName("customerExternalId")
     */
    public $customerExternalId;

    /**
     * @var DateTime
     *
     * @SerializedName("startDate")
     */
    public $startDate;

    /**
     * @var DateTime
     *
     * @SerializedName("endDate")
     */
    public $endDate;
}
