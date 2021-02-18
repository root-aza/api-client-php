<?php

/**
 * PHP version 7.3
 *
 * @category CustomersRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */

namespace RetailCrm\Api\Model\Request\Customers;

use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;
use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class CustomersRequest
 *
 * @category CustomersRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */
class CustomersRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Customers\CustomerFilter
     *
     * @SerializedName("filter")
     */
    public $filter;
}
