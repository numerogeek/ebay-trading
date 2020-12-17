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
 * Enumerated type that defines the date format that is used for a date-related field that is returned in the
 * GetCategorySpecifics
 * call.
 * on which are enforceable for validation purposes
 **/
class ValueFormatCodeType extends EbatNs_EnumType
{
    const TAG = 'ValueFormatCodeType';
    const NAME = 'ValueFormatCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that a full date is used, including the month, day, and year in the following
     * format:
     * '<em>YYYYMMDD</em>'
     **/
    const CodeType_FullDate = 'FullDate';

    /**
     * This enumeration value indicates that a partial date is used, including the month and year in the following
     * format: '<em>YYYYMM</em>'
     **/
    const CodeType_PartialDate = 'PartialDate';

    /**
     * This enumeration value indicates that only the year is returned in the following format: '<em>YYYY</em>'
     **/
    const CodeType_Year = 'Year';

    /**
     * Reserved for future or internal use.
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
     * @return ValueFormatCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ValueFormatCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isFullDate()
    {
        return $this->_value === self::CodeType_FullDate;
    }

    /**
     * @return bool
     */
    public function isPartialDate()
    {
        return $this->_value === self::CodeType_PartialDate;
    }

    /**
     * @return bool
     */
    public function isYear()
    {
        return $this->_value === self::CodeType_Year;
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

ValueFormatCodeType::_register();
