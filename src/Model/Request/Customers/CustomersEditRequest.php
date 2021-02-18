<?php

/**
 * PHP version 7.3
 *
 * @category CustomersEditRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */

namespace RetailCrm\Api\Model\Request\Customers;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class CustomersEditRequest
 *
 * @category CustomersEditRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */
class CustomersEditRequest extends CustomersCreateRequest
{
    /**
     * @var string
     *
     * @SerializedName("by")
     */
    public $by;
}
