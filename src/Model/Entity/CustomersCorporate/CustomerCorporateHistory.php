<?php

/**
 * PHP version 7.3
 *
 * @category CustomerCorporateHistory
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Entity\CustomersCorporate;

use DateTime;
use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class CustomerCorporateHistory
 *
 * @category CustomerCorporateHistory
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */
class CustomerCorporateHistory
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
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate
     *
     * @SerializedName("customer")
     */
    public $customer;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\CustomerAddress
     *
     * @SerializedName("customer")
     */
    public $address;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate
     *
     * @SerializedName("combinedTo")
     */
    public $combinedTo;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact
     *
     * @SerializedName("customerContact")
     */
    public $customerContact;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\Company
     *
     * @SerializedName("company")
     */
    public $company;
}
