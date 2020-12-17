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
 * Enumerated type that defines the possible settings for the automated feedback mechanism embedded in the
 * SetSellingManagerFeedbackOptions
 * API call. This type is only applicable to Selling Manager Pro users.
 **/
class AutomatedLeaveFeedbackEventCodeType extends EbatNs_EnumType
{
    const TAG = 'AutomatedLeaveFeedbackEventCodeType';
    const NAME = 'AutomatedLeaveFeedbackEventCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * If the
     * AutomatedLeaveFeedbackEvent
     * field is set to this value, the automated feedback mechanism will automatically leave feedback for the buyer
     * once that buyer leaves positive feedback for the seller.
     **/
    const CodeType_PositiveFeedbackReceived = 'PositiveFeedbackReceived';

    /**
     * If the
     * AutomatedLeaveFeedbackEvent
     * field is set to this value, the automated feedback mechanism will automatically leave feedback for the buyer
     * once that buyer pays for the line item.
     **/
    const CodeType_PaymentReceived = 'PaymentReceived';

    /**
     * If the
     * AutomatedLeaveFeedbackEvent
     * field is set to this value, the automated feedback mechanism will essentially be turned off. Automated feedback
     * will not occur.
     **/
    const CodeType_None = 'None';

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
     * @return AutomatedLeaveFeedbackEventCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param AutomatedLeaveFeedbackEventCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isPositiveFeedbackReceived()
    {
        return $this->_value === self::CodeType_PositiveFeedbackReceived;
    }

    /**
     * @return bool
     */
    public function isPaymentReceived()
    {
        return $this->_value === self::CodeType_PaymentReceived;
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

AutomatedLeaveFeedbackEventCodeType::_register();
