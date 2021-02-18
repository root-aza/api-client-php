<?php

/**
 * PHP version 7.3
 *
 * @category CustomerAddress
 * @package  RetailCrm\Api\Model\Entity\Customers
 */

namespace RetailCrm\Api\Model\Entity\Customers;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class CustomerAddress
 *
 * @category CustomerAddress
 * @package  RetailCrm\Api\Model\Entity\Customers
 */
class CustomerAddress
{
    /**
     * @var int
     * @SerializedName("id")
     */
    public $id;

    /**
     * @var bool
     * @SerializedName("isMain")
     */
    public $isMain;

    /**
     * @var string
     * @SerializedName("index")
     */
    public $index;

    /**
     * @var string
     * @SerializedName("countryIso")
     */
    public $countryIso;

    /**
     * @var string
     * @SerializedName("region")
     */
    public $region;

    /**
     * @var int
     * @SerializedName("regionId")
     */
    public $regionId;

    /**
     * @var string
     * @SerializedName("city")
     */
    public $city;

    /**
     * @var int
     * @SerializedName("cityId")
     */
    public $cityId;

    /**
     * @var string
     * @SerializedName("cityType")
     */
    public $cityType;

    /**
     * @var string
     * @SerializedName("street")
     */
    public $street;

    /**
     * @var int
     * @SerializedName("streetId")
     */
    public $streetId;

    /**
     * @var string
     * @SerializedName("streetType")
     */
    public $streetType;

    /**
     * @var string
     * @SerializedName("building")
     */
    public $building;

    /**
     * @var string
     * @SerializedName("flat")
     */
    public $flat;

    /**
     * @var int
     * @SerializedName("floor")
     */
    public $floor;

    /**
     * @var int
     * @SerializedName("block")
     */
    public $block;

    /**
     * @var string
     * @SerializedName("house")
     */
    public $house;

    /**
     * @var string
     * @SerializedName("housing")
     */
    public $housing;

    /**
     * @var string
     * @SerializedName("metro")
     */
    public $metro;

    /**
     * @var string
     * @SerializedName("notes")
     */
    public $notes;

    /**
     * @var string
     * @SerializedName("text")
     */
    public $text;

    /**
     * @var string
     * @SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var string
     * @SerializedName("name")
     */
    public $name;
}
