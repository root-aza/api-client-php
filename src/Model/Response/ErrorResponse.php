<?php

/**
 * PHP version 7.3
 *
 * @category ErrorResponse
 * @package  RetailCrm\Api\Model\Response
 */

namespace RetailCrm\Api\Model\Response;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class ErrorResponse
 *
 * @category ErrorResponse
 * @package  RetailCrm\Api\Model\Response
 */
class ErrorResponse extends SuccessResponse
{
    /**
     * ErrorResponse constructor.
     */
    public function __construct()
    {
        $this->success = false;
    }

    /**
     * @var string[]
     * @SerializedName("errors")
     */
    public $errors;

    /**
     * @var string
     * @SerializedName("errorMsg")
     */
    public $errorMsg;
}
