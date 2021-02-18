<?php

/**
 * PHP version 7.3
 *
 * @category CustomerNote
 * @package  RetailCrm\Api\Model\Entity\Customers
 */

namespace RetailCrm\Api\Model\Entity\Customers;

use DateTime;
use RetailCrm\Api\Model\Entity\Entity;
use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class CustomerNote
 *
 * @category CustomerNote
 * @package  RetailCrm\Api\Model\Entity\Customers
 */
class CustomerNote implements Entity
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\Customer
     *
     * @SerializedName("customer")
     */
    public $customer;

    /**
     * @var int
     * @SerializedName("managerId")
     */
    public $managerId;

    /**
     * @var int
     * @SerializedName("id")
     */
    public $id;

    /**
     * @var string
     * @SerializedName("text")
     */
    public $text;

    /**
     * @var DateTime
     *
     * @SerializedName("createdAt")
     */
    public $createdAt;
}
