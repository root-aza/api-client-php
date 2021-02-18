<?php

/**
 * PHP version 7.3
 *
 * @category CostsGetResponse
 * @package  RetailCrm\Api\Model\Response\Costs
 */

namespace RetailCrm\Api\Model\Response\Costs;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CostsGetResponse
 *
 * @category CostsGetResponse
 * @package  RetailCrm\Api\Model\Response\Costs
 */
class CostsGetResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Costs\Cost
     *
     * @SerializedName("cost")
     */
    public $cost;
}
