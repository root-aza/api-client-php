<?php

/**
 * PHP version 7.3
 *
 * @category CustomerContact
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Entity\CustomersCorporate;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class CustomerContact
 *
 * @category CustomerContact
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */
class CustomerContact
{
    /**
     * @var int
     * @SerializedName("id")
     */
    public $id;

    /**
     * @var bool
     * @SerializedName("isMain")
     */
    public $isMain;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer
     *
     * @SerializedName("customer")
     */
    public $customer;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany[]
     *
     * @SerializedName("companies")
     */
    public $companies;
}
