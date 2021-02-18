<?php

/**
 * PHP version 7.3
 *
 * @category EntityWithExternalIdInput
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Entity\CustomersCorporate;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class EntityWithExternalIdInput
 *
 * @category EntityWithExternalIdInput
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */
class EntityWithExternalIdInput
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
}
