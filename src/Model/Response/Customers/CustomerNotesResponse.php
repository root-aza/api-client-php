<?php

/**
 * PHP version 7.3
 *
 * @category CustomerNotesResponse
 * @package  RetailCrm\Api\Model\Response\Customers
 */

namespace RetailCrm\Api\Model\Response\Customers;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class CustomerNotesResponse
 *
 * @category CustomerNotesResponse
 * @package  RetailCrm\Api\Model\Response\Customers
 */
class CustomerNotesResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\CustomerNote[]
     *
     * @SerializedName("notes")
     */
    public $notes;
}
