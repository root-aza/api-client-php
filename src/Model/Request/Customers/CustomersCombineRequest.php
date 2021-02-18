<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCombineRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */

namespace RetailCrm\Api\Model\Request\Customers;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CustomersCombineRequest
 *
 * @category CustomersCombineRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */
class CustomersCombineRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\SerializedCustomerReference
     *
     * @SerializedName("resultCustomer")
     */
    public $resultCustomer;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\SerializedCustomerReference[]
     *
     * @SerializedName("customers")
     */
    public $customers;
}
