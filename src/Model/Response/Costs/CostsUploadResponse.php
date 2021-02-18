<?php

/**
 * PHP version 7.3
 *
 * @category CostsUploadResponse
 * @package  RetailCrm\Api\Model\Response\Costs
 */

namespace RetailCrm\Api\Model\Response\Costs;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CostsUploadResponse
 *
 * @category CostsUploadResponse
 * @package  RetailCrm\Api\Model\Response\Costs
 */
class CostsUploadResponse extends SuccessResponse
{
    /**
     * @var int[]
     * @SerializedName("uploadedCosts")
     */
    public $uploadedCosts;
}
