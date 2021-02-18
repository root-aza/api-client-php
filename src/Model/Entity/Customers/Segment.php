<?php

/**
 * PHP version 7.3
 *
 * @category Segment
 * @package  RetailCrm\Api\Model\Entity\Customers
 */

namespace RetailCrm\Api\Model\Entity\Customers;

use DateTime;
use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class Segment
 *
 * @category Segment
 * @package  RetailCrm\Api\Model\Entity\Customers
 */
class Segment
{
    /**
     * @var int
     * @SerializedName("id")
     */
    public $id;

    /**
     * @var string
     * @SerializedName("code")
     */
    public $code;

    /**
     * @var string
     * @SerializedName("name")
     */
    public $name;

    /**
     * @var DateTime
     *
     * @SerializedName("createdAt")
     */
    public $createdAt;

    /**
     * @var bool
     * @SerializedName("isDynamic")
     */
    public $isDynamic;

    /**
     * @var int
     * @SerializedName("customersCount")
     */
    public $customersCount;

    /**
     * @var bool
     * @SerializedName("active")
     */
    public $active;
}
