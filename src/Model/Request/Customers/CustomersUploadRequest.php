<?php

/**
 * PHP version 7.3
 *
 * @category CustomersUploadRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */

namespace RetailCrm\Api\Model\Request\Customers;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CustomersUploadRequest
 *
 * @category CustomersUploadRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */
class CustomersUploadRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\Customer[]
     *
     * @SerializedName("customers")
     */
    public $customers;
}
