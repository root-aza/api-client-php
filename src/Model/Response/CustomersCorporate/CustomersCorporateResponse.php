<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCorporateResponse
 * @package  RetailCrm\Api\Model\Response\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Response\CustomersCorporate;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class CustomersCorporateResponse
 *
 * @category CustomersCorporateResponse
 * @package  RetailCrm\Api\Model\Response\CustomersCorporate
 */
class CustomersCorporateResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate[]
     *
     * @SerializedName("customersCorporate")
     */
    public $customersCorporate;
}
