<?php

/**
 * PHP version 7.3
 *
 * @category CustomersResponse
 * @package  RetailCrm\Api\Model\Response\Customers
 */

namespace RetailCrm\Api\Model\Response\Customers;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class CustomersResponse
 *
 * @category CustomersResponse
 * @package  RetailCrm\Api\Model\Response\Customers
 */
class CustomersResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\Customer[]
     *
     * @SerializedName("customers")
     */
    public $customers;
}
