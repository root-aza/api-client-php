<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCorporateFixExternalIdsRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Request\CustomersCorporate;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CustomersCorporateFixExternalIdsRequest
 *
 * @category CustomersCorporateFixExternalIdsRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */
class CustomersCorporateFixExternalIdsRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\FixExternalRow[]
     *
     * @SerializedName("customersCorporate")
     */
    public $customersCorporate;
}
