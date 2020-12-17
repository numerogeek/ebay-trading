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
 * This enumerated type is deprecated.
 **/
class GeneralPaymentMethodCodeType extends EbatNs_EnumType
{
    const TAG = 'GeneralPaymentMethodCodeType';
    const NAME = 'GeneralPaymentMethodCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is not used.
     **/
    const CodeType_Other = 'Other';

    /**
     * This value is not used.
     **/
    const CodeType_Echeck = 'Echeck';

    /**
     * This value is not used.
     **/
    const CodeType_ACH = 'ACH';

    /**
     * This value is not used.
     **/
    const CodeType_Creditcard = 'Creditcard';

    /**
     * This value is not used.
     **/
    const CodeType_PayPalBalance = 'PayPalBalance';

    /**
     * This value is not used.
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
     * @return GeneralPaymentMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param GeneralPaymentMethodCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isOther()
    {
        return $this->_value === self::CodeType_Other;
    }

    /**
     * @return bool
     */
    public function isEcheck()
    {
        return $this->_value === self::CodeType_Echeck;
    }

    /**
     * @return bool
     */
    public function isACH()
    {
        return $this->_value === self::CodeType_ACH;
    }

    /**
     * @return bool
     */
    public function isCreditcard()
    {
        return $this->_value === self::CodeType_Creditcard;
    }

    /**
     * @return bool
     */
    public function isPayPalBalance()
    {
        return $this->_value === self::CodeType_PayPalBalance;
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

GeneralPaymentMethodCodeType::_register();
