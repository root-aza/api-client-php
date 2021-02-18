<?php

/**
 * PHP version 7.3
 *
 * @category SerializedRelationAbstractCustomer
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Entity\CustomersCorporate;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class SerializedRelationAbstractCustomer
 *
 * @category SerializedRelationAbstractCustomer
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */
class SerializedRelationAbstractCustomer
{
    /**
     * @var int
     * @SerializedName("id")
     */
    public $id;

    /**
     * @var string
     * @SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var string
     * @SerializedName("browserId")
     */
    public $browserId;

    /**
     * @var string
     * @SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany[]
     *
     * @SerializedName("companies")
     */
    public $companies;
}
