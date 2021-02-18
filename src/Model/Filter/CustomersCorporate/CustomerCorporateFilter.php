<?php

/**
 * PHP version 7.3
 *
 * @category CustomerCorporateFilter
 * @package  RetailCrm\Api\Model\Filter\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Filter\CustomersCorporate;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class CustomerCorporateFilter
 *
 * @category CustomerCorporateFilter
 * @package  RetailCrm\Api\Model\Filter\CustomersCorporate
 *
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.LongVariable)
 */
class CustomerCorporateFilter
{
    /**
     * @var string[]
     *
     * @SerializedName("nickName")
     */
    public $nickName;

    /**
     * @var string
     *
     * @SerializedName("contactName")
     */
    public $contactName;

    /**
     * @var string
     *
     * @SerializedName("addressName")
     */
    public $addressName;

    /**
     * @var string
     *
     * @SerializedName("contragentName")
     */
    public $contragentName;

    /**
     * @var string
     *
     * @SerializedName("contragentInn")
     */
    public $contragentInn;

    /**
     * @var string
     *
     * @SerializedName("contragentKpp")
     */
    public $contragentKpp;

    /**
     * @var string
     *
     * @SerializedName("contragentBik")
     */
    public $contragentBik;

    /**
     * @var string
     *
     * @SerializedName("contragentCorrAccount")
     */
    public $contragentCorrAccount;

    /**
     * @var string
     *
     * @SerializedName("contragentBankAccount")
     */
    public $contragentBankAccount;

    /**
     * @var string[]
     *
     * @SerializedName("contragentTypes")
     */
    public $contragentTypes;

    /**
     * @var string[]
     *
     * @SerializedName("externalIds")
     */
    public $externalIds;

    /**
     * @var string
     *
     * @SerializedName("name")
     */
    public $name;

    /**
     * @var string
     *
     * @SerializedName("city")
     */
    public $city;

    /**
     * @var string
     *
     * @SerializedName("region")
     */
    public $region;

    /**
     * @var string
     *
     * @SerializedName("email")
     */
    public $email;

    /**
     * @var string
     *
     * @SerializedName("notes")
     */
    public $notes;

    /**
     * @var string
     *
     * @SerializedName("minOrdersCount")
     */
    public $minOrdersCount;

    /**
     * @var string
     *
     * @SerializedName("maxOrdersCount")
     */
    public $maxOrdersCount;

    /**
     * @var string
     *
     * @SerializedName("minAverageSumm")
     */
    public $minAverageSumm;

    /**
     * @var string
     *
     * @SerializedName("maxAverageSumm")
     */
    public $maxAverageSumm;

    /**
     * @var string
     *
     * @SerializedName("minTotalSumm")
     */
    public $minTotalSumm;

    /**
     * @var string
     *
     * @SerializedName("maxTotalSumm")
     */
    public $maxTotalSumm;

    /**
     * @var string
     *
     * @SerializedName("classSegment")
     */
    public $classSegment;

    /**
     * @var string
     *
     * @SerializedName("discountCardNumber")
     */
    public $discountCardNumber;

    /**
     * @var string
     *
     * @SerializedName("attachments")
     */
    public $attachments;

    /**
     * @var string
     *
     * @SerializedName("minCostSumm")
     */
    public $minCostSumm;

    /**
     * @var string
     *
     * @SerializedName("maxCostSumm")
     */
    public $maxCostSumm;

    /**
     * @var string
     *
     * @SerializedName("vip")
     */
    public $vip;

    /**
     * @var string
     *
     * @SerializedName("bad")
     */
    public $bad;

    /**
     * @var string
     *
     * @SerializedName("tasksCounts")
     */
    public $tasksCounts;

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
     * @SerializedName("managers")
     */
    public $managers;

    /**
     * @var string[]
     *
     * @SerializedName("managerGroups")
     */
    public $managerGroups;

    /**
     * @var string
     *
     * @SerializedName("dateFrom")
     */
    public $dateFrom;

    /**
     * @var string
     *
     * @SerializedName("dateTo")
     */
    public $dateTo;

    /**
     * @var string
     *
     * @SerializedName("firstOrderFrom")
     */
    public $firstOrderFrom;

    /**
     * @var string
     *
     * @SerializedName("firstOrderTo")
     */
    public $firstOrderTo;

    /**
     * @var string
     *
     * @SerializedName("lastOrderFrom")
     */
    public $lastOrderFrom;

    /**
     * @var string
     *
     * @SerializedName("lastOrderTo")
     */
    public $lastOrderTo;

    /**
     * @var mixed[][]
     *
     * @SerializedName("CustomersCorporate")
     */
    public $CustomersCorporate;

    /**
     * @var int[]
     *
     * @SerializedName("contactIds")
     */
    public $contactIds;

    /**
     * @var string
     *
     * @SerializedName("companyName")
     */
    public $companyName;
}
