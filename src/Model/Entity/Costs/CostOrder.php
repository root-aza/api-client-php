<?php

/**
 * PHP version 7.3
 *
 * @category CostOrder
 * @package  RetailCrm\Api\Model\Entity\Costs
 */

namespace RetailCrm\Api\Model\Entity\Costs;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class CostOrder
 *
 * @category CostOrder
 * @package  RetailCrm\Api\Model\Entity\Costs
 */
class CostOrder
{
    /**
     * @var int
     * @SerializedName("id")
     */
    public $id;

    /**
     * @var string
     * @SerializedName("number")
     */
    public $number;

    /**
     * @var string
     * @SerializedName("externalId")
     */
    public $externalId;
}
