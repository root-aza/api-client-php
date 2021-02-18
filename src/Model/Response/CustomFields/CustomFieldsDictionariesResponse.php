<?php

/**
 * PHP version 7.3
 *
 * @category CustomFieldsDictionariesResponse
 * @package  RetailCrm\Api\Model\Response\CustomFields
 */

namespace RetailCrm\Api\Model\Response\CustomFields;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class CustomFieldsDictionariesResponse
 *
 * @category CustomFieldsDictionariesResponse
 * @package  RetailCrm\Api\Model\Response\CustomFields
 */
class CustomFieldsDictionariesResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\CustomFields\CustomDictionary[]
     *
     * @SerializedName("customDictionaries")
     */
    public $customDictionaries;
}
