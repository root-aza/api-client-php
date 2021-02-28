<?php

/**
 * PHP version 7.3
 *
 * @category OrderProduct
 * @package  RetailCrm\Api\Model\Entity\Order\Items
 */

namespace RetailCrm\Api\Model\Entity\Order\Items;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class OrderProduct
 *
 * @category OrderProduct
 * @package  RetailCrm\Api\Model\Entity\Order\Items
 *
 * @SuppressWarnings(PHPMD.LongVariables)
 */
class OrderProduct
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var string[]
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("markingCodes")
     */
    public $markingCodes;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var \RetailCrm\Api\Model\Entity\CodeValueModel[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\CodeValueModel>")
     * @JMS\SerializedName("externalIds")
     */
    public $externalIds;

    /**
     * @var \RetailCrm\Api\Model\Entity\Order\Items\PriceType
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Order\Items\PriceType")
     * @JMS\SerializedName("priceType")
     */
    public $priceType;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("initialPrice")
     */
    public $initialPrice;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("discountManualAmount")
     */
    public $discountManualAmount;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("discountManualPercent")
     */
    public $discountManualPercent;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("discountTotal")
     */
    public $discountTotal;

    /**
     * @var \RetailCrm\Api\Model\Entity\Order\Items\OrderProductPriceItem[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Order\Items\OrderProductPriceItem>")
     * @JMS\SerializedName("prices")
     */
    public $prices;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("vatRate")
     */
    public $vatRate;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("createdAt")
     */
    public $createdAt;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("quantity")
     */
    public $quantity;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("status")
     */
    public $status;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("comment")
     */
    public $comment;

    /**
     * @var \RetailCrm\Api\Model\Entity\Order\Items\Offer
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Order\Items\Offer")
     * @JMS\SerializedName("offer")
     */
    public $offer;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("productName")
     */
    public $productName;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("isCanceled")
     */
    public $isCanceled;

    /**
     * @var array<string, \RetailCrm\Api\Model\Entity\Order\Items\ItemProperty>
     *
     * @JMS\Type("array<string, RetailCrm\Api\Model\Entity\Order\Items\ItemProperty>")
     * @JMS\SerializedName("properties")
     */
    public $properties;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("purchasePrice")
     */
    public $purchasePrice;
}
