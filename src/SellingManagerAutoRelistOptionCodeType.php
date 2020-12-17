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
 * Enumerated type that defines the values that control how soon the item is relisted after the original listing
 * ends.
 **/
class SellingManagerAutoRelistOptionCodeType extends EbatNs_EnumType
{
    const TAG = 'SellingManagerAutoRelistOptionCodeType';
    const NAME = 'SellingManagerAutoRelistOptionCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * If this value is set, the item is relisted immediately after the original listing ends.
     **/
    const CodeType_RelistImmediately = 'RelistImmediately';

    /**
     * If this value is set, the item is relisted after a specified number of days and/or hours. If this value is set,
     * the
     * RelistAfterDays
     * and/or the
     * RelistAfterHours
     * fields must also be set.
     **/
    const CodeType_RelistAfterDaysHours = 'RelistAfterDaysHours';

    /**
     * If this value is set, the item is relisted at a specific time of day, either the day when the listing ends (if
     * the specified time has not passed), or the day after (if the specified time has already passed on that day). If
     * this value is set, the
     * RelistAtSpecificTimeOfDay
     * field must also be set.
     **/
    const CodeType_RelistAtSpecificTimeOfDay = 'RelistAtSpecificTimeOfDay';

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
     * @return SellingManagerAutoRelistOptionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SellingManagerAutoRelistOptionCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isRelistImmediately()
    {
        return $this->_value === self::CodeType_RelistImmediately;
    }

    /**
     * @return bool
     */
    public function isRelistAfterDaysHours()
    {
        return $this->_value === self::CodeType_RelistAfterDaysHours;
    }

    /**
     * @return bool
     */
    public function isRelistAtSpecificTimeOfDay()
    {
        return $this->_value === self::CodeType_RelistAtSpecificTimeOfDay;
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

SellingManagerAutoRelistOptionCodeType::_register();
