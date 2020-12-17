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
 * Enumerated type that consists of all days of the week.
 **/
class DayOfWeekCodeType extends EbatNs_EnumType
{
    const TAG = 'DayOfWeekCodeType';
    const NAME = 'DayOfWeekCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates the day of the week is Sunday.
     **/
    const CodeType_Sunday = 'Sunday';

    /**
     * This enumeration value indicates the day of the week is Monday.
     **/
    const CodeType_Monday = 'Monday';

    /**
     * This enumeration value indicates the day of the week is Tuesday.
     **/
    const CodeType_Tuesday = 'Tuesday';

    /**
     * This enumeration value indicates the day of the week is Wednesday.
     **/
    const CodeType_Wednesday = 'Wednesday';

    /**
     * This enumeration value indicates the day of the week is Thursday.
     **/
    const CodeType_Thursday = 'Thursday';

    /**
     * This enumeration value indicates the day of the week is Friday.
     **/
    const CodeType_Friday = 'Friday';

    /**
     * This enumeration value indicates the day of the week is Saturday.
     **/
    const CodeType_Saturday = 'Saturday';

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
     * @return DayOfWeekCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param DayOfWeekCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isSunday()
    {
        return $this->_value === self::CodeType_Sunday;
    }

    /**
     * @return bool
     */
    public function isMonday()
    {
        return $this->_value === self::CodeType_Monday;
    }

    /**
     * @return bool
     */
    public function isTuesday()
    {
        return $this->_value === self::CodeType_Tuesday;
    }

    /**
     * @return bool
     */
    public function isWednesday()
    {
        return $this->_value === self::CodeType_Wednesday;
    }

    /**
     * @return bool
     */
    public function isThursday()
    {
        return $this->_value === self::CodeType_Thursday;
    }

    /**
     * @return bool
     */
    public function isFriday()
    {
        return $this->_value === self::CodeType_Friday;
    }

    /**
     * @return bool
     */
    public function isSaturday()
    {
        return $this->_value === self::CodeType_Saturday;
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

DayOfWeekCodeType::_register();
