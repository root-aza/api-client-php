<?php

/**
 * PHP version 7.3
 *
 * @category CustomersHistoryResponse
 * @package  RetailCrm\Api\Model\Response\Customers
 */

namespace RetailCrm\Api\Model\Response\Customers;

use DateTime;
use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class CustomersHistoryResponse
 *
 * @category CustomersHistoryResponse
 * @package  RetailCrm\Api\Model\Response\Customers
 */
class CustomersHistoryResponse extends AbstractPaginatedResponse
{
    /**
     * @var DateTime
     *
     * @SerializedName("generatedAt")
     */
    public $generatedAt;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\CustomerHistory[]
     *
     * @SerializedName("history")
     */
    public $history;
}
