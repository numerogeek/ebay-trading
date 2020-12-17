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
 * Font size selection for Store configuration.
 **/
class StoreFontSizeCodeType extends EbatNs_EnumType
{
    const TAG = 'StoreFontSizeCodeType';
    const NAME = 'StoreFontSizeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Extra extra small.
     **/
    const CodeType_XXS = 'XXS';

    /**
     * Extra small.
     **/
    const CodeType_XS = 'XS';

    /**
     * Small.
     **/
    const CodeType_S = 'S';

    /**
     * Medium.
     **/
    const CodeType_M = 'M';

    /**
     * Large.
     **/
    const CodeType_L = 'L';

    /**
     * Extra large.
     **/
    const CodeType_XL = 'XL';

    /**
     * Extra extra large.
     **/
    const CodeType_XXL = 'XXL';

    /**
     * Reserved for internal or future use.
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
     * @return StoreFontSizeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param StoreFontSizeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isXXS()
    {
        return $this->_value === self::CodeType_XXS;
    }

    /**
     * @return bool
     */
    public function isXS()
    {
        return $this->_value === self::CodeType_XS;
    }

    /**
     * @return bool
     */
    public function isS()
    {
        return $this->_value === self::CodeType_S;
    }

    /**
     * @return bool
     */
    public function isM()
    {
        return $this->_value === self::CodeType_M;
    }

    /**
     * @return bool
     */
    public function isL()
    {
        return $this->_value === self::CodeType_L;
    }

    /**
     * @return bool
     */
    public function isXL()
    {
        return $this->_value === self::CodeType_XL;
    }

    /**
     * @return bool
     */
    public function isXXL()
    {
        return $this->_value === self::CodeType_XXL;
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

StoreFontSizeCodeType::_register();
