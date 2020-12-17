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
class LogoTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'LogoTypeCodeType';
    const NAME = 'LogoTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This field is deprecated.
     **/
    const CodeType_WinningBidderNotice = 'WinningBidderNotice';

    /**
     * This field is deprecated.
     **/
    const CodeType_Store = 'Store';

    /**
     * This field is deprecated.
     **/
    const CodeType_Custom = 'Custom';

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
     * @return LogoTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param LogoTypeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isWinningBidderNotice()
    {
        return $this->_value === self::CodeType_WinningBidderNotice;
    }

    /**
     * @return bool
     */
    public function isStore()
    {
        return $this->_value === self::CodeType_Store;
    }

    /**
     * @return bool
     */
    public function isCustom()
    {
        return $this->_value === self::CodeType_Custom;
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

LogoTypeCodeType::_register();
