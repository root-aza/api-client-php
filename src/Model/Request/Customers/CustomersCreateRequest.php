<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCreateRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */

namespace RetailCrm\Api\Model\Request\Customers;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CustomersCreateRequest
 *
 * @category CustomersCreateRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */
class CustomersCreateRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\Customer
     *
     * @SerializedName("customer")
     */
    public $customer;
}
