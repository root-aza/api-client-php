<?php

/**
 * PHP version 7.3
 *
 * @category SuccessResponse
 * @package  RetailCrm\Api\Model\Response
 */

namespace RetailCrm\Api\Model\Response;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Interfaces\ResponseInterface;

/**
 * Class SuccessResponse
 *
 * @category SuccessResponse
 * @package  RetailCrm\Api\Model\Response
 */
class SuccessResponse implements ResponseInterface
{
    /**
     * @var bool
     * @SerializedName("success")
     */
    public $success = true;
}
