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
 * This enumerated type is used to control how the "Buy It Now" button is displayed on a listing.
 * 
 * <span class="tablenote">
 * Note:
 * Sellers opted in to the new eBay managed payments program cannot control the display of the "Buy It Now" button
 * in listings, and although the
 * DisplayPayNowButton
 * value can still be set in
 * SetUserPreferences
 * and returned in
 * GetUserPreferences
 * , the setting will not have any affect on any current or future listings for the seller. eBay managed payments is
 * currently only available to a limited number of sellers on the US and Germany sites. The rollout to more sellers
 * in more countries will be a multi-year journey, but eBay expects to transition a majority of sellers worldwide to
 * managed payments by 2021.
 * </span>
 **/
class DisplayPayNowButtonCodeType extends EbatNs_EnumType
{
    const TAG = 'DisplayPayNowButtonCodeType';
    const NAME = 'DisplayPayNowButtonCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that the "Pay Now" button will be displayed no matter what payment method the
     * buyer uses.
     **/
    const CodeType_ShowPayNowButtonForAllPaymentMethods = 'ShowPayNowButtonForAllPaymentMethods';

    /**
     * This enumeration value indicates that the "Pay Now" button will only be displayed if the buyer is using PayPal as
     * the payment method.
     **/
    const CodeType_ShowPayNowButtonForPayPalOnly = 'ShowPayNowButtonForPayPalOnly';

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
     * @return DisplayPayNowButtonCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param DisplayPayNowButtonCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isShowPayNowButtonForAllPaymentMethods()
    {
        return $this->_value === self::CodeType_ShowPayNowButtonForAllPaymentMethods;
    }

    /**
     * @return bool
     */
    public function isShowPayNowButtonForPayPalOnly()
    {
        return $this->_value === self::CodeType_ShowPayNowButtonForPayPalOnly;
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

DisplayPayNowButtonCodeType::_register();
