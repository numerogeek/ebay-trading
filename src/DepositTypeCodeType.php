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
 * For vehicles listed through the US eBay Motors site, DepositType
 * indicates how the buyer should pay the deposit amount. It is
 * used in conjunction with a buyer payment method (BuyerPaymentMethodCodeType).
 **/
class DepositTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'DepositTypeCodeType';
    const NAME = 'DepositTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * (out) No deposit needed.
     **/
    const CodeType_None = 'None';

    /**
     * (out) Pay the deposit using PayPal, and then
     * use any of the other specified payment methods to pay the balance.
     **/
    const CodeType_OtherMethod = 'OtherMethod';

    /**
     * (out) No longer used.
     **/
    const CodeType_FastDeposit = 'FastDeposit';

    /**
     * (out) Reserved for internal or future use
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
     * @return DepositTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param DepositTypeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isNone()
    {
        return $this->_value === self::CodeType_None;
    }

    /**
     * @return bool
     */
    public function isOtherMethod()
    {
        return $this->_value === self::CodeType_OtherMethod;
    }

    /**
     * @return bool
     */
    public function isFastDeposit()
    {
        return $this->_value === self::CodeType_FastDeposit;
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

DepositTypeCodeType::_register();
