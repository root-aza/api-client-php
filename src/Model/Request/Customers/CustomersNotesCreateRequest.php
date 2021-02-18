<?php

/**
 * PHP version 7.3
 *
 * @category CustomersNotesCreateRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */

namespace RetailCrm\Api\Model\Request\Customers;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CustomersNotesCreateRequest
 *
 * @category CustomersNotesCreateRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */
class CustomersNotesCreateRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\CustomerNote
     *
     * @SerializedName("note")
     */
    public $note;
}
