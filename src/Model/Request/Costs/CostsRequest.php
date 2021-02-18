<?php

/**
 * PHP version 7.3
 *
 * @category CostsRequest
 * @package  RetailCrm\Api\Model\Request\Costs
 */

namespace RetailCrm\Api\Model\Request\Costs;

use RetailCrm\Api\Interfaces\RequestInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;

/**
 * Class CostsRequest
 *
 * @category CostsRequest
 * @package  RetailCrm\Api\Model\Request\Costs
 */
class CostsRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Costs\CostFilter
     *
     * @SerializedName("filter")
     */
    public $filter;
}
