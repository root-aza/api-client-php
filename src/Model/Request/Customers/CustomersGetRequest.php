<?php

/**
 * PHP version 7.3
 *
 * @category CustomersGetRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */

namespace RetailCrm\Api\Model\Request\Customers;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CustomersGetRequest
 *
 * @category CustomersGetRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */
class CustomersGetRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @SerializedName("by")
     */
    public $by;

    /**
     * @var string
     *
     * @SerializedName("site")
     */
    public $site;
}
