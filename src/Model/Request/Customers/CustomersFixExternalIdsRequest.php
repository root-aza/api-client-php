<?php

/**
 * PHP version 7.3
 *
 * @category CustomersFixExternalIdsRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */

namespace RetailCrm\Api\Model\Request\Customers;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CustomersFixExternalIdsRequest
 *
 * @category CustomersFixExternalIdsRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */
class CustomersFixExternalIdsRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\FixExternalRow[]
     *
     * @SerializedName("customers")
     */
    public $customers;
}
