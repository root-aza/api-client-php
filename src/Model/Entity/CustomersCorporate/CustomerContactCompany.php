<?php

/**
 * PHP version 7.3
 *
 * @category CustomerContactCompany
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Entity\CustomersCorporate;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class CustomerContactCompany
 *
 * @category CustomerContactCompany
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */
class CustomerContactCompany extends EntityWithExternalIdInput
{
    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput
     *
     * @SerializedName("company")
     */
    public $company;
}
