<?php

/**
 * PHP version 7.3
 *
 * @category Cost
 * @package  RetailCrm\Api\Model\Entity\Costs
 */

namespace RetailCrm\Api\Model\Entity\Costs;

use DateTime;
use RetailCrm\Api\Model\Entity\Entity;
use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class Cost
 *
 * @category Cost
 * @package  RetailCrm\Api\Model\Entity\Costs
 */
class Cost implements Entity
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Source
     *
     * @SerializedName("source")
     */
    public $source;

    /**
     * @var int
     * @SerializedName("id")
     */
    public $id;

    /**
     * @var DateTime
     *
     * //Type("DateTime<'Y-m-d'>")
     * @SerializedName("dateFrom")
     */
    public $dateFrom;

    /**
     * @var DateTime
     *
     * //Type("DateTime<'Y-m-d'>")
     * @SerializedName("dateTo")
     */
    public $dateTo;

    /**
     * @var float
     * @SerializedName("summ")
     */
    public $summ;

    /**
     * @var string
     * @SerializedName("costItem")
     */
    public $costItem;

    /**
     * @var string
     * @SerializedName("comment")
     */
    public $comment;

    /**
     * @var DateTime
     *
     * @SerializedName("createdAt")
     */
    public $createdAt;

    /**
     * @var string
     * @SerializedName("createdBy")
     */
    public $createdBy;

    /**
     * @var \RetailCrm\Api\Model\Entity\Costs\CostOrder
     *
     * @SerializedName("order")
     */
    public $order;

    /**
     * @var int
     * @SerializedName("userId")
     */
    public $userId;

    /**
     * @var string[]
     * @SerializedName("sites")
     */
    public $sites;

    /**
     * @return string
     */
    public function getDateFrom(): string
    {
        if (null === $this->dateFrom) {
            return null;
        }

        return $this->dateFrom->format('Y-m-d');
    }

    /**
     * @return string
     */
    public function getDateTo(): string
    {
        if (null === $this->dateTo) {
            return null;
        }

        return $this->dateTo->format('Y-m-d');
    }
}
