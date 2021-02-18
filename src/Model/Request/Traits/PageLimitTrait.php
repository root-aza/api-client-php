<?php

/**
 * PHP version 7.3
 *
 * @category PageLimitTrait
 * @package  RetailCrm\Api\Model\Request\Traits
 */

namespace RetailCrm\Api\Model\Request\Traits;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Trait PageLimitTrait
 *
 * @category PageLimitTrait
 * @package  RetailCrm\Api\Model\Request\Traits
 */
trait PageLimitTrait
{
    /**
     * @var int
     *
     * @SerializedName("limit")
     */
    public $limit;

    /**
     * @var int
     *
     * @SerializedName("page")
     */
    public $page;
}
