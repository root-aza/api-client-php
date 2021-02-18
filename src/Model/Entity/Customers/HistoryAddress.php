<?php

/**
 * PHP version 7.3
 *
 * @category HistoryAddress
 * @package  RetailCrm\Api\Model\Entity\Customers
 */

namespace RetailCrm\Api\Model\Entity\Customers;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class HistoryAddress
 *
 * @category HistoryAddress
 * @package  RetailCrm\Api\Model\Entity\Customers
 */
class HistoryAddress
{
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
     * @SerializedName("name")
     */
    public $name;

    /**
     * @var bool
     * @SerializedName("isMain")
     */
    public $isMain;
}
