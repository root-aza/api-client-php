<?php

/**
 * PHP version 7.3
 *
 * @category CostsDeleteRequest
 * @package  RetailCrm\Api\Model\Request\Costs
 */

namespace RetailCrm\Api\Model\Request\Costs;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CostsDeleteRequest
 *
 * @category CostsDeleteRequest
 * @package  RetailCrm\Api\Model\Request\Costs
 */
class CostsDeleteRequest implements RequestInterface
{
    /**
     * @var int[]
     *
     * @SerializedName("ids")
     */
    public $ids = [];
}
