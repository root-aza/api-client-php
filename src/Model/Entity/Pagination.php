<?php

/**
 * PHP version 7.3
 *
 * @category Pagination
 * @package  RetailCrm\Api\Model\Entity
 */

namespace RetailCrm\Api\Model\Entity;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class Pagination
 *
 * @category Pagination
 * @package  RetailCrm\Api\Model\Entity
 */
class Pagination
{
    /**
     * @var int
     * @SerializedName("limit")
     */
    public $limit;

    /**
     * @var int
     * @SerializedName("totalCount")
     */
    public $totalCount;

    /**
     * @var int
     * @SerializedName("currentPage")
     */
    public $currentPage;

    /**
     * @var int
     * @SerializedName("totalPageCount")
     */
    public $totalPageCount;
}
