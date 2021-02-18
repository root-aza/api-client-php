<?php

/**
 * PHP version 7.3
 *
 * @category CostsUploadRequest
 * @package  RetailCrm\Api\Model\Request\Costs
 */

namespace RetailCrm\Api\Model\Request\Costs;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CostsUploadRequest
 *
 * @category CostsUploadRequest
 * @package  RetailCrm\Api\Model\Request\Costs
 */
class CostsUploadRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Costs\Cost[]
     *
     * @SerializedName("costs")
     */
    public $costs;
}
