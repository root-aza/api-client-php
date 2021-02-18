<?php

/**
 * PHP version 7.3
 *
 * @category CustomersUploadResponse
 * @package  RetailCrm\Api\Model\Response\Customers
 */

namespace RetailCrm\Api\Model\Response\Customers;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CustomersUploadResponse
 *
 * @category CustomersUploadResponse
 * @package  RetailCrm\Api\Model\Response\Customers
 */
class CustomersUploadResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\FixExternalRow[]
     *
     * @SerializedName("uploadedCustomers")
     */
    public $uploadedCustomers;
}
