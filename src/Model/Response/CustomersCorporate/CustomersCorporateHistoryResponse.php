<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCorporateHistoryResponse
 * @package  RetailCrm\Api\Model\Response\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Response\CustomersCorporate;

use DateTime;
use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class CustomersCorporateHistoryResponse
 *
 * @category CustomersCorporateHistoryResponse
 * @package  RetailCrm\Api\Model\Response\CustomersCorporate
 */
class CustomersCorporateHistoryResponse extends AbstractPaginatedResponse
{
    /**
     * @var DateTime
     *
     * @SerializedName("generatedAt")
     */
    public $generatedAt;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporateHistory[]
     *
     * @SerializedName("history")
     */
    public $history;
}
