<?php

/**
 * PHP version 7.3
 *
 * @category CustomersHistoryRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */

namespace RetailCrm\Api\Model\Request\Customers;

use RetailCrm\Api\Interfaces\RequestInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;

/**
 * Class CustomersHistoryRequest
 *
 * @category CustomersHistoryRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */
class CustomersHistoryRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Customers\CustomerHistoryFilter
     *
     * @SerializedName("filter")
     */
    public $filter;
}
