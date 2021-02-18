<?php

/**
 * PHP version 7.3
 *
 * @category IdResponse
 * @package  RetailCrm\Api\Model\Response
 */

namespace RetailCrm\Api\Model\Response;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class IdResponse
 *
 * @category IdResponse
 * @package  RetailCrm\Api\Model\Response
 */
class IdResponse extends SuccessResponse
{
    /**
     * @var int
     * @SerializedName("id")
     */
    public $id;
}
