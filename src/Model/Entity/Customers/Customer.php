<?php

/**
 * PHP version 7.3
 *
 * @category Customer
 * @package  RetailCrm\Api\Model\Entity\Customers
 */

namespace RetailCrm\Api\Model\Entity\Customers;

use DateTime;
use RetailCrm\Api\Model\Entity\Entity;
use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class Customer
 *
 * @category Customer
 * @package  RetailCrm\Api\Model\Entity\Customers
 *
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.LongVariable)
 */
class Customer implements Entity
{
    /**
     * @var string
     * @SerializedName("type")
     */
    public $type;

    /**
     * @var int
     * @SerializedName("id")
     */
    public $id;

    /**
     * @var string
     * @SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var bool
     * @SerializedName("isContact")
     */
    public $isContact;

    /**
     * @var DateTime
     *
     * @SerializedName("createdAt")
     */
    public $createdAt;

    /**
     * @var int
     * @SerializedName("managerId")
     */
    public $managerId;

    /**
     * @var bool
     * @SerializedName("vip")
     */
    public $vip;

    /**
     * @var bool
     * @SerializedName("bad")
     */
    public $bad;

    /**
     * @var string
     * @SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\CustomerContragent
     *
     * @SerializedName("contragent")
     */
    public $contragent;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\CustomerTag[]
     *
     * @SerializedName("tags")
     */
    public $tags;

    /**
     * @var float
     * @SerializedName("avgMarginSumm")
     */
    public $avgMarginSumm;

    /**
     * @var float
     * @SerializedName("marginSumm")
     */
    public $marginSumm;

    /**
     * @var float
     * @SerializedName("totalSumm")
     */
    public $totalSumm;

    /**
     * @var float
     * @SerializedName("averageSumm")
     */
    public $averageSumm;

    /**
     * @var int
     * @SerializedName("ordersCount")
     */
    public $ordersCount;

    /**
     * @var float
     * @SerializedName("costSumm")
     */
    public $costSumm;

    /**
     * @var array<string, mixed>
     * @SerializedName("customFields")
     */
    public $customFields;

    /**
     * @var float
     * @SerializedName("personalDiscount")
     */
    public $personalDiscount;

    /**
     * @var float
     * @SerializedName("cumulativeDiscount")
     */
    public $cumulativeDiscount;

    /**
     * @var string
     * @SerializedName("discountCardNumber")
     */
    public $discountCardNumber;

    /**
     * @var string
     * @SerializedName("firstClientId")
     */
    public $firstClientId;

    /**
     * @var string
     * @SerializedName("lastClientId")
     */
    public $lastClientId;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\CustomerAddress
     *
     * @SerializedName("address")
     */
    public $address;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\Segment[]
     *
     * @SerializedName("segments")
     */
    public $segments;

    /**
     * @var int
     * @SerializedName("maturationTime")
     */
    public $maturationTime;

    /**
     * @var string
     * @SerializedName("firstName")
     */
    public $firstName;

    /**
     * @var string
     * @SerializedName("lastName")
     */
    public $lastName;

    /**
     * @var string
     * @SerializedName("patronymic")
     */
    public $patronymic;

    /**
     * @var string
     * @SerializedName("sex")
     */
    public $sex;

    /**
     * @var string
     * @SerializedName("presumableSex")
     */
    public $presumableSex;

    /**
     * @var string
     * @SerializedName("email")
     */
    public $email;

    /**
     * @var DateTime
     *
     * @SerializedName("emailMarketingUnsubscribedAt")
     */
    public $emailMarketingUnsubscribedAt;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\CustomerPhone[]
     *
     * @SerializedName("phones")
     */
    public $phones;

    /**
     * @var DateTime
     *
     * @SerializedName("birthday")
     */
    public $birthday;

    /**
     * @var \RetailCrm\Api\Model\Entity\Source
     *
     * @SerializedName("source")
     */
    public $source;

    /**
     * @var string
     * @SerializedName("photoUrl")
     */
    public $photoUrl;

    /**
     * @var int
     * @SerializedName("mgCustomerId")
     */
    public $mgCustomerId;

    /**
     * @var bool
     * @SerializedName("subscribed")
     */
    public $subscribed;
}
