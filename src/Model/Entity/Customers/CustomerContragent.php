<?php

/**
 * PHP version 7.3
 *
 * @category CustomerContragent
 * @package  RetailCrm\Api\Model\Entity\Customers
 */

namespace RetailCrm\Api\Model\Entity\Customers;

use DateTime;
use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class CustomerContragent
 *
 * @category CustomerContragent
 * @package  RetailCrm\Api\Model\Entity\Customers
 */
class CustomerContragent
{
    /**
     * @var string
     * @SerializedName("contragentType")
     */
    public $contragentType;

    /**
     * @var string
     * @SerializedName("legalName")
     */
    public $legalName;

    /**
     * @var string
     * @SerializedName("legalAddress")
     */
    public $legalAddress;

    /**
     * @var string
     * @SerializedName("INN")
     */
    public $INN;

    /**
     * @var string
     * @SerializedName("OKPO")
     */
    public $OKPO;

    /**
     * @var string
     * @SerializedName("KPP")
     */
    public $KPP;

    /**
     * @var string
     * @SerializedName("OGRN")
     */
    public $OGRN;

    /**
     * @var string
     * @SerializedName("OGRNIP")
     */
    public $OGRNIP;

    /**
     * @var string
     * @SerializedName("certificateNumber")
     */
    public $certificateNumber;

    /**
     * @var DateTime
     *
     * @SerializedName("certificateDate")
     */
    public $certificateDate;

    /**
     * @var string
     * @SerializedName("BIK")
     */
    public $BIK;

    /**
     * @var string
     * @SerializedName("bank")
     */
    public $bank;

    /**
     * @var string
     * @SerializedName("bankAddress")
     */
    public $bankAddress;

    /**
     * @var string
     * @SerializedName("corrAccount")
     */
    public $corrAccount;

    /**
     * @var string
     * @SerializedName("bankAccount")
     */
    public $bankAccount;
}
