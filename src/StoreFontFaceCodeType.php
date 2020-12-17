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
 * Font selection for Store configuration.
 **/
class StoreFontFaceCodeType extends EbatNs_EnumType
{
    const TAG = 'StoreFontFaceCodeType';
    const NAME = 'StoreFontFaceCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Arial font.
     **/
    const CodeType_Arial = 'Arial';

    /**
     * Courier font.
     **/
    const CodeType_Courier = 'Courier';

    /**
     * Times New Roman font.
     **/
    const CodeType_Times = 'Times';

    /**
     * Verdana font.
     **/
    const CodeType_Verdana = 'Verdana';

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
     * @return StoreFontFaceCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param StoreFontFaceCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isArial()
    {
        return $this->_value === self::CodeType_Arial;
    }

    /**
     * @return bool
     */
    public function isCourier()
    {
        return $this->_value === self::CodeType_Courier;
    }

    /**
     * @return bool
     */
    public function isTimes()
    {
        return $this->_value === self::CodeType_Times;
    }

    /**
     * @return bool
     */
    public function isVerdana()
    {
        return $this->_value === self::CodeType_Verdana;
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

StoreFontFaceCodeType::_register();
