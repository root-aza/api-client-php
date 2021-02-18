<?php

/**
 * PHP version 7.3
 *
 * @category EntityWithExternalIdNameOutput
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Entity\CustomersCorporate;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class EntityWithExternalIdNameOutput
 *
 * @category EntityWithExternalIdNameOutput
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */
class EntityWithExternalIdNameOutput extends EntityWithExternalIdInput
{
    /**
     * @var string
     * @SerializedName("name")
     */
    public $name;
}
