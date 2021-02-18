<?php

/**
 * PHP version 7.3
 *
 * @category CustomersNotesRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */

namespace RetailCrm\Api\Model\Request\Customers;

use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;
use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class CustomersNotesRequest
 *
 * @category CustomersNotesRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */
class CustomersNotesRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Customers\CustomerNoteFilter
     *
     * @SerializedName("filter")
     */
    public $filter;
}
