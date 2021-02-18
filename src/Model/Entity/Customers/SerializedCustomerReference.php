<?php

/**
 * PHP version 7.3
 *
 * @category SerializedCustomerReference
 * @package  RetailCrm\Api\Enum\Customers
 */

namespace RetailCrm\Api\Model\Entity\Customers;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class SerializedCustomerReference
 *
 * @category SerializedCustomerReference
 * @package  RetailCrm\Api\Enum\Customers
 */
class SerializedCustomerReference
{
    /**
     * @var int
     *
     * @SerializedName("id")
     */
    public $id;

    /**
     * SerializedCustomerReference constructor.
     *
     * @param int $id Customer ID
     */
    public function __construct(int $id = 0)
    {
        $this->id = $id;
    }
}
