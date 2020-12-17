<?php

namespace InTradeSys\eBay\trading;

/*
 * This class was generated from a WSDL file from November 27, 2020, 4:13 pm.
 * Executed by globalsync.
 * Provided and maintained by:
 *
 *  InTradeSys GmbH
 *  Dillenburger Str. 75
 *  D-51105 Cologne
 *  ---
 *  https://www.intradesys.com
 */

/**
 * Mark paid status type.
 **/
class SellingManagerPaidStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'SellingManagerPaidStatusCodeType';
    const NAME = 'SellingManagerPaidStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * The status of the order is "paid."
     **/
    const CodeType_Paid = 'Paid';

    /**
     * The status of the order is "partially paid."
     **/
    const CodeType_PartiallyPaid = 'PartiallyPaid';

    /**
     * The status of the order is "unpaid."
     **/
    const CodeType_Unpaid = 'Unpaid';

    /**
     * The status of the order is "pending."
     **/
    const CodeType_Pending = 'Pending';

    /**
     * The status of the order is "refunded."
     **/
    const CodeType_Refunded = 'Refunded';

    /**
     * (out) Reserved for internal or future use.
     **/
    const CodeType_CustomCode = 'CustomCode';
    
    /**
     * @var string|null
     */
    protected $_value = null;


    /**
     * @param string|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return SellingManagerPaidStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SellingManagerPaidStatusCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isPaid()
    {
        return $this->_value === self::CodeType_Paid;
    }

    /**
     * @return bool
     */
    public function isPartiallyPaid()
    {
        return $this->_value === self::CodeType_PartiallyPaid;
    }

    /**
     * @return bool
     */
    public function isUnpaid()
    {
        return $this->_value === self::CodeType_Unpaid;
    }

    /**
     * @return bool
     */
    public function isPending()
    {
        return $this->_value === self::CodeType_Pending;
    }

    /**
     * @return bool
     */
    public function isRefunded()
    {
        return $this->_value === self::CodeType_Refunded;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

SellingManagerPaidStatusCodeType::_register();
