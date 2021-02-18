<?php

/**
 * PHP version 7.3
 *
 * @category CostsDeleteResponse
 * @package  RetailCrm\Api\Model\Response\Costs
 */

namespace RetailCrm\Api\Model\Response\Costs;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CostsDeleteResponse
 *
 * @category CostsDeleteResponse
 * @package  RetailCrm\Api\Model\Response\Costs
 */
class CostsDeleteResponse extends SuccessResponse
{
    /**
     * @var int
     * @SerializedName("count")
     */
    public $count;

    /**
     * @var int[]
     * @SerializedName("notRemovedIds")
     */
    public $notRemovedIds;
}
