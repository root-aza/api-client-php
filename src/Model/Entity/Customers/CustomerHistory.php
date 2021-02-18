<?php

/**
 * PHP version 7.3
 *
 * @category CustomerHistory
 * @package  RetailCrm\Api\Model\Entity\Customers
 */

namespace RetailCrm\Api\Model\Entity\Customers;

use DateTime;
use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class CustomerHistory
 *
 * @category CustomerHistory
 * @package  RetailCrm\Api\Model\Entity\Customers
 */
class CustomerHistory
{
    /**
     * @var int
     * @SerializedName("id")
     */
    public $id;

    /**
     * @var DateTime
     *
     * @SerializedName("createdAt")
     */
    public $createdAt;

    /**
     * @var bool
     * @SerializedName("created")
     */
    public $created;

    /**
     * @var bool
     * @SerializedName("deleted")
     */
    public $deleted;

    /**
     * @var string
     * @SerializedName("source")
     */
    public $source;

    /**
     * @var \RetailCrm\Api\Model\Entity\HistoryUser
     *
     * @SerializedName("user")
     */
    public $user;

    /**
     * @var string
     * @SerializedName("field")
     */
    public $field;

    /**
     * @var mixed
     * @SerializedName("oldValue")
     */
    public $oldValue;

    /**
     * @var mixed
     * @SerializedName("newValue")
     */
    public $newValue;

    /**
     * @var \RetailCrm\Api\Model\Entity\HistoryApiKey
     *
     * @SerializedName("apiKey")
     */
    public $apiKey;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\Customer
     *
     * @SerializedName("customer")
     */
    public $customer;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\HistoryAddress
     *
     * @SerializedName("address")
     */
    public $address;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\Customer
     *
     * @SerializedName("combinedTo")
     */
    public $combinedTo;
}
