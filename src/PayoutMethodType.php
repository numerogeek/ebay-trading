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
class PayoutMethodType extends EbatNs_EnumType
{
    const TAG = 'PayoutMethodType';
    const NAME = 'PayoutMethodType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is not used.
     **/
    const CodeType_PAYPAL = 'PAYPAL';

    /**
     * This value is not used.
     **/
    const CodeType_EFT = 'EFT';

    /**
     * This value is not used.
     **/
    const CodeType_MONEYBOOKERS = 'MONEYBOOKERS';
    
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
     * @return PayoutMethodType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PayoutMethodType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isPAYPAL()
    {
        return $this->_value === self::CodeType_PAYPAL;
    }

    /**
     * @return bool
     */
    public function isEFT()
    {
        return $this->_value === self::CodeType_EFT;
    }

    /**
     * @return bool
     */
    public function isMONEYBOOKERS()
    {
        return $this->_value === self::CodeType_MONEYBOOKERS;
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

PayoutMethodType::_register();
