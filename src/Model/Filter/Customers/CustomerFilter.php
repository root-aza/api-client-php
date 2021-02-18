<?php

/**
 * PHP version 7.3
 *
 * @category CustomerFilter
 * @package  RetailCrm\Api\Model\Filter\Customers
 */

namespace RetailCrm\Api\Model\Filter\Customers;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class CustomerFilter
 *
 * @category CustomerFilter
 * @package  RetailCrm\Api\Model\Filter\Customers
 *
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 * @SuppressWarnings(PHPMD.LongVariable)
 */
class CustomerFilter
{
    /**
     * @var string
     *
     * @SerializedName("isContact")
     */
    public $isContact;

    /**
     * @var string
     *
     * @SerializedName("online")
     */
    public $online;

    /**
     * @var string
     *
     * @SerializedName("sex")
     */
    public $sex;

    /**
     * @var int
     *
     * @SerializedName("emailMarketingUnsubscribed")
     */
    public $emailMarketingUnsubscribed;

    /**
     * @var string[]
     *
     * @SerializedName("countries")
     */
    public $countries;

    /**
     * @var string
     *
     * @SerializedName("contragentName")
     */
    public $contragentName;

    /**
     * @var string[]
     *
     * @SerializedName("contragentTypes")
     */
    public $contragentTypes;

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
     * @var string
     *
     * @SerializedName("segment")
     */
    public $segment;

    /**
     * @var int[]
     *
     * @SerializedName("mgChannels")
     */
    public $mgChannels;

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
     * @SerializedName("firstWebVisitFrom")
     */
    public $firstWebVisitFrom;

    /**
     * @var string
     *
     * @SerializedName("firstWebVisitTo")
     */
    public $firstWebVisitTo;

    /**
     * @var string
     *
     * @SerializedName("lastWebVisitFrom")
     */
    public $lastWebVisitFrom;

    /**
     * @var string
     *
     * @SerializedName("lastWebVisitTo")
     */
    public $lastWebVisitTo;

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
     * @var array<string, mixed>
     *
     * @SerializedName("customFields")
     */
    public $customFields;

    /**
     * @var string
     *
     * @SerializedName("browserId")
     */
    public $browserId;

    /**
     * @var string
     *
     * @SerializedName("commentary")
     */
    public $commentary;

    /**
     * @var string
     *
     * @SerializedName("sourceName")
     */
    public $sourceName;

    /**
     * @var string
     *
     * @SerializedName("mediumName")
     */
    public $mediumName;

    /**
     * @var string
     *
     * @SerializedName("campaignName")
     */
    public $campaignName;

    /**
     * @var string
     *
     * @SerializedName("keywordName")
     */
    public $keywordName;

    /**
     * @var string
     *
     * @SerializedName("adContentName")
     */
    public $adContentName;

    /**
     * @var string
     *
     * @SerializedName("mgCustomerId")
     */
    public $mgCustomerId;

    /**
     * @var string[]
     *
     * @SerializedName("tags")
     */
    public $tags;

    /**
     * @var string[]
     *
     * @SerializedName("attachedTags")
     */
    public $attachedTags;

    /**
     * @var string
     *
     * @SerializedName("mgCustomerIds")
     */
    public $mgCustomerIds;
}
