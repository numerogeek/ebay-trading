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
class EscrowCodeType extends EbatNs_EnumType
{
    const TAG = 'EscrowCodeType';
    const NAME = 'EscrowCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This field is deprecated.
     **/
    const CodeType_ByBuyer = 'ByBuyer';

    /**
     * This field is deprecated.
     **/
    const CodeType_BySeller = 'BySeller';

    /**
     * This field is deprecated.
     **/
    const CodeType_None = 'None';

    /**
     * This field is deprecated.
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
     * @return EscrowCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param EscrowCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isByBuyer()
    {
        return $this->_value === self::CodeType_ByBuyer;
    }

    /**
     * @return bool
     */
    public function isBySeller()
    {
        return $this->_value === self::CodeType_BySeller;
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

EscrowCodeType::_register();
