<?php

/**
 * PHP version 7.3
 *
 * @category CustomersGetResponse
 * @package  RetailCrm\Api\Model\Response\Customers
 */

namespace RetailCrm\Api\Model\Response\Customers;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CustomersGetResponse
 *
 * @category CustomersGetResponse
 * @package  RetailCrm\Api\Model\Response\Customers
 */
class CustomersGetResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\Customer
     *
     * @SerializedName("customer")
     */
    public $customer;
}
