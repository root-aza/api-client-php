<?php

/**
 * PHP version 7.3
 *
 * @category CostsCreateRequest
 * @package  RetailCrm\Api\Model\Request\Costs
 */

namespace RetailCrm\Api\Model\Request\Costs;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CostsCreateRequest
 *
 * @category CostsCreateRequest
 * @package  RetailCrm\Api\Model\Request\Costs
 */
class CostsCreateRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\Costs\Cost
     *
     * @SerializedName("cost")
     */
    public $cost;
}
