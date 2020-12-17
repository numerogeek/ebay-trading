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
 * Enumerated type defining the possible states for a nonprofit charity organization registered with the PayPal
 * Giving Fund.
 **/
class CharityStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'CharityStatusCodeType';
    const NAME = 'CharityStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * The specified nonprofit charity organization is a valid nonprofit charity organization according to the
     * requirements of the PayPal Giving Fund.
     **/
    const CodeType_Valid = 'Valid';

    /**
     * The specified nonprofit charity organization is no longer a valid nonprofit charity organization according to the
     * requirements of the PayPal Giving Fund.
     **/
    const CodeType_NoLongerValid = 'NoLongerValid';

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
     * @return CharityStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param CharityStatusCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return $this->_value === self::CodeType_Valid;
    }

    /**
     * @return bool
     */
    public function isNoLongerValid()
    {
        return $this->_value === self::CodeType_NoLongerValid;
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

CharityStatusCodeType::_register();
