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
 * Specifies how the custom listing header will be displayed.
 **/
class StoreCustomListingHeaderDisplayCodeType extends EbatNs_EnumType
{
    const TAG = 'StoreCustomListingHeaderDisplayCodeType';
    const NAME = 'StoreCustomListingHeaderDisplayCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * No custom listing header is displayed.
     **/
    const CodeType_None = 'None';

    /**
     * The full custom listing header is displayed.
     **/
    const CodeType_Full = 'Full';

    /**
     * The full custom listing header and the left navigation bar is displayed.
     **/
    const CodeType_FullAndLeftNavigationBar = 'FullAndLeftNavigationBar';

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
     * @return StoreCustomListingHeaderDisplayCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param StoreCustomListingHeaderDisplayCodeType|null $value
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
    public function isFull()
    {
        return $this->_value === self::CodeType_Full;
    }

    /**
     * @return bool
     */
    public function isFullAndLeftNavigationBar()
    {
        return $this->_value === self::CodeType_FullAndLeftNavigationBar;
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

StoreCustomListingHeaderDisplayCodeType::_register();
