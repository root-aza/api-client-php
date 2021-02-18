<?php

/**
 * PHP version 7.3
 *
 * @category CustomersEditResponse
 * @package  RetailCrm\Api\Model\Response\Customers
 */

namespace RetailCrm\Api\Model\Response\Customers;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Model\Response\IdResponse;

/**
 * Class CustomersEditResponse
 *
 * @category CustomersEditResponse
 * @package  RetailCrm\Api\Model\Response\Customers
 */
class CustomersEditResponse extends IdResponse
{
    /**
     * @var string
     * @SerializedName("state")
     */
    public $state;
}
