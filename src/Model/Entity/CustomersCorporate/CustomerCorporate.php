<?php

/**
 * PHP version 7.3
 *
 * @category CustomerCorporate
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Entity\CustomersCorporate;

use DateTime;
use RetailCrm\Api\Model\Entity\Entity;
use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class CustomerCorporate
 *
 * @category CustomerCorporate
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */
class CustomerCorporate implements Entity
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
     * @var string
     * @SerializedName("nickName")
     */
    public $nickName;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput
     *
     * @SerializedName("mainAddress")
     */
    public $mainAddress;

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
     * @var \RetailCrm\Api\Model\Entity\Source
     *
     * @SerializedName("source")
     */
    public $source;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact[]
     *
     * @SerializedName("customerContacts")
     */
    public $customerContacts;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\Company[]
     *
     * @SerializedName("companies")
     */
    public $companies;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\CustomerAddress[]
     *
     * @SerializedName("addresses")
     */
    public $addresses;

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
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact
     *
     * @SerializedName("mainCustomerContact")
     */
    public $mainCustomerContact;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput
     *
     * @SerializedName("mainCompany")
     */
    public $mainCompany;
}
