<?php

/**
 * PHP version 7.3
 *
 * @category Credentials
 * @package  RetailCrm\Api\Model\Response\Api
 */

namespace RetailCrm\Api\Model\Response\Api;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class Credentials
 *
 * @category Credentials
 * @package  RetailCrm\Api\Model\Response\Api
 */
class Credentials extends SuccessResponse
{
    /**
     * @var string[]
     * @SerializedName("credentials")
     */
    public $credentials;

    /**
     * @var string
     * @SerializedName("siteAccess")
     */
    public $siteAccess;

    /**
     * @var string[]
     * @SerializedName("sitesAvailable")
     */
    public $sitesAvailable;
}
