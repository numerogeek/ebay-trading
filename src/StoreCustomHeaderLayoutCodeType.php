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
 * Specifies whether the Store has a custom header.
 **/
class StoreCustomHeaderLayoutCodeType extends EbatNs_EnumType
{
    const TAG = 'StoreCustomHeaderLayoutCodeType';
    const NAME = 'StoreCustomHeaderLayoutCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Specifies that the Store does not have a custom header.
     **/
    const CodeType_NoHeader = 'NoHeader';

    /**
     * Specifies that the Store does have a custom header.
     **/
    const CodeType_CustomHeaderShown = 'CustomHeaderShown';

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
     * @return StoreCustomHeaderLayoutCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param StoreCustomHeaderLayoutCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isNoHeader()
    {
        return $this->_value === self::CodeType_NoHeader;
    }

    /**
     * @return bool
     */
    public function isCustomHeaderShown()
    {
        return $this->_value === self::CodeType_CustomHeaderShown;
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

StoreCustomHeaderLayoutCodeType::_register();
