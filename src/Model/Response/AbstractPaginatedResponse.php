<?php

/**
 * PHP version 7.3
 *
 * @category AbstractPaginatedResponse
 * @package  RetailCrm\Api\Model\Response
 */

namespace RetailCrm\Api\Model\Response;

use Symfony\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Model\Entity\Pagination;

/**
 * Class AbstractPaginatedResponse
 *
 * @category AbstractPaginatedResponse
 * @package  RetailCrm\Api\Model\Response
 */
abstract class AbstractPaginatedResponse extends SuccessResponse
{
    /**
     * @var Pagination
     *
     * @SerializedName("pagination")
     */
    public $pagination;
}
