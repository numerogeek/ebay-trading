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
 * Enumerated type containing a list of visit counter styles that can be used in an eBay listing to track page
 * visits.
 **/
class HitCounterCodeType extends EbatNs_EnumType
{
    const TAG = 'HitCounterCodeType';
    const NAME = 'HitCounterCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * No hit counter. The number of page views will not be available.
     **/
    const CodeType_NoHitCounter = 'NoHitCounter';

    /**
     * A basic style hit counter (US only). Non-US sites will return errors if they use HonestyStyle as input, and
     * should use BasicStyle instead.
     **/
    const CodeType_HonestyStyle = 'HonestyStyle';

    /**
     * A green LED, computer-style hit counter (US only). Non-US sites will return errors if they use GreenLED as input,
     * and should use RetroStyle instead.
     **/
    const CodeType_GreenLED = 'GreenLED';

    /**
     * A hidden hit counter (US only). The number of page views will only be available to
     * the item's seller. For faster "View Item" page loads, use HiddenStyle.
     **/
    const CodeType_Hidden = 'Hidden';

    /**
     * A basic style hit counter.
     **/
    const CodeType_BasicStyle = 'BasicStyle';

    /**
     * A retro, computer-style hit counter.
     **/
    const CodeType_RetroStyle = 'RetroStyle';

    /**
     * A hidden hit counter. The number of page views will only be available to
     * the item's seller.
     **/
    const CodeType_HiddenStyle = 'HiddenStyle';

    /**
     * Reserved for internal or future use
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
     * @return HitCounterCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param HitCounterCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isNoHitCounter()
    {
        return $this->_value === self::CodeType_NoHitCounter;
    }

    /**
     * @return bool
     */
    public function isHonestyStyle()
    {
        return $this->_value === self::CodeType_HonestyStyle;
    }

    /**
     * @return bool
     */
    public function isGreenLED()
    {
        return $this->_value === self::CodeType_GreenLED;
    }

    /**
     * @return bool
     */
    public function isHidden()
    {
        return $this->_value === self::CodeType_Hidden;
    }

    /**
     * @return bool
     */
    public function isBasicStyle()
    {
        return $this->_value === self::CodeType_BasicStyle;
    }

    /**
     * @return bool
     */
    public function isRetroStyle()
    {
        return $this->_value === self::CodeType_RetroStyle;
    }

    /**
     * @return bool
     */
    public function isHiddenStyle()
    {
        return $this->_value === self::CodeType_HiddenStyle;
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

HitCounterCodeType::_register();
