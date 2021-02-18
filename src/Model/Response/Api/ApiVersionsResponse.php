<?php

/**
 * PHP version 7.3
 *
 * @category ApiVersionsResponse
 * @package  RetailCrm\Api\Model\Response\Api
 */

namespace RetailCrm\Api\Model\Response\Api;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class ApiVersionsResponse
 *
 * @category ApiVersionsResponse
 * @package  RetailCrm\Api\Model\Response\Api
 */
class ApiVersionsResponse extends SuccessResponse
{
    /**
     * @var string[]
     * @SerializedName("versions")
     */
    public $versions;
}
