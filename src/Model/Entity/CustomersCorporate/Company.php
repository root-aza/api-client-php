<?php

/**
 * PHP version 7.3
 *
 * @category Company
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Entity\CustomersCorporate;

use DateTime;
use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class Company
 *
 * @category Company
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */
class Company
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
     * @var string
     * @SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var bool
     * @SerializedName("active")
     */
    public $active;

    /**
     * @var string
     * @SerializedName("name")
     */
    public $name;

    /**
     * @var string
     * @SerializedName("brand")
     */
    public $brand;

    /**
     * @var string
     * @SerializedName("site")
     */
    public $site;

    /**
     * @var DateTime
     *
     * @SerializedName("createdAt")
     */
    public $createdAt;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\CustomerContragent
     *
     * @SerializedName("contragent")
     */
    public $contragent;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdInput
     *
     * @SerializedName("address")
     */
    public $address;

    /**
     * @var array<string, mixed>
     * @SerializedName("customFields")
     */
    public $customFields;
}
