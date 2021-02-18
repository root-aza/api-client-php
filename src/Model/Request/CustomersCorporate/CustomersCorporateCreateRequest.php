<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCorporateCreateRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Request\CustomersCorporate;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CustomersCorporateCreateRequest
 *
 * @category CustomersCorporateCreateRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */
class CustomersCorporateCreateRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate
     *
     * @SerializedName("customerCorporate")
     */
    public $customerCorporate;
}
