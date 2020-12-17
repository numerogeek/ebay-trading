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
 * SellingManagerSoldListingsSortType - Specifies the fields that can be used to sort the listings.
 **/
class SellingManagerSoldListingsSortTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'SellingManagerSoldListingsSortTypeCodeType';
    const NAME = 'SellingManagerSoldListingsSortTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Sorts listings by sales Record ID.
     **/
    const CodeType_SalesRecordID = 'SalesRecordID';

    /**
     * Sorts listings by Buyer email or ID.
     **/
    const CodeType_BuyerEmail = 'BuyerEmail';

    /**
     * Sorts listings by sale format.
     **/
    const CodeType_SaleFormat = 'SaleFormat';

    /**
     * Sorts listings by Custom label.
     **/
    const CodeType_CustomLabel = 'CustomLabel';

    /**
     * Sorts listings by Total Price.
     **/
    const CodeType_TotalPrice = 'TotalPrice';

    /**
     * Sorts listings by Sale Date.
     **/
    const CodeType_SaleDate = 'SaleDate';

    /**
     * Sorts listings by Paid Date.
     **/
    const CodeType_PaidDate = 'PaidDate';

    /**
     * Sorts listings by Emails sent.
     **/
    const CodeType_EmailsSent = 'EmailsSent';

    /**
     * Sorts listings by Checkout status.
     **/
    const CodeType_CheckoutState = 'CheckoutState';

    /**
     * Sorts by Paid status.
     **/
    const CodeType_PaidState = 'PaidState';

    /**
     * Sorts by Shipped state.
     **/
    const CodeType_ShippedState = 'ShippedState';

    /**
     * Sorts by feedback left.
     **/
    const CodeType_FeedbackLeft = 'FeedbackLeft';

    /**
     * Sorts by FeedbackReceived.
     **/
    const CodeType_FeedbackReceived = 'FeedbackReceived';

    /**
     * Sorts by Shipped Date.
     **/
    const CodeType_ShippedDate = 'ShippedDate';

    /**
     * Sorts by buyer Postal code.
     **/
    const CodeType_BuyerPostalCode = 'BuyerPostalCode';

    /**
     * Sorts by Days since sale.
     **/
    const CodeType_DaysSinceSale = 'DaysSinceSale';

    /**
     * Sort by Start price.
     **/
    const CodeType_StartPrice = 'StartPrice';

    /**
     * Sort by ReservePrice.
     **/
    const CodeType_ReservePrice = 'ReservePrice';

    /**
     * Sorts by Sold site.
     **/
    const CodeType_SoldOn = 'SoldOn';

    /**
     * Sorts by Shipping cost.
     **/
    const CodeType_ShippingCost = 'ShippingCost';

    /**
     * Sorts by Listed site.
     **/
    const CodeType_ListedOn = 'ListedOn';

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
     * @return SellingManagerSoldListingsSortTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SellingManagerSoldListingsSortTypeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isSalesRecordID()
    {
        return $this->_value === self::CodeType_SalesRecordID;
    }

    /**
     * @return bool
     */
    public function isBuyerEmail()
    {
        return $this->_value === self::CodeType_BuyerEmail;
    }

    /**
     * @return bool
     */
    public function isSaleFormat()
    {
        return $this->_value === self::CodeType_SaleFormat;
    }

    /**
     * @return bool
     */
    public function isCustomLabel()
    {
        return $this->_value === self::CodeType_CustomLabel;
    }

    /**
     * @return bool
     */
    public function isTotalPrice()
    {
        return $this->_value === self::CodeType_TotalPrice;
    }

    /**
     * @return bool
     */
    public function isSaleDate()
    {
        return $this->_value === self::CodeType_SaleDate;
    }

    /**
     * @return bool
     */
    public function isPaidDate()
    {
        return $this->_value === self::CodeType_PaidDate;
    }

    /**
     * @return bool
     */
    public function isEmailsSent()
    {
        return $this->_value === self::CodeType_EmailsSent;
    }

    /**
     * @return bool
     */
    public function isCheckoutState()
    {
        return $this->_value === self::CodeType_CheckoutState;
    }

    /**
     * @return bool
     */
    public function isPaidState()
    {
        return $this->_value === self::CodeType_PaidState;
    }

    /**
     * @return bool
     */
    public function isShippedState()
    {
        return $this->_value === self::CodeType_ShippedState;
    }

    /**
     * @return bool
     */
    public function isFeedbackLeft()
    {
        return $this->_value === self::CodeType_FeedbackLeft;
    }

    /**
     * @return bool
     */
    public function isFeedbackReceived()
    {
        return $this->_value === self::CodeType_FeedbackReceived;
    }

    /**
     * @return bool
     */
    public function isShippedDate()
    {
        return $this->_value === self::CodeType_ShippedDate;
    }

    /**
     * @return bool
     */
    public function isBuyerPostalCode()
    {
        return $this->_value === self::CodeType_BuyerPostalCode;
    }

    /**
     * @return bool
     */
    public function isDaysSinceSale()
    {
        return $this->_value === self::CodeType_DaysSinceSale;
    }

    /**
     * @return bool
     */
    public function isStartPrice()
    {
        return $this->_value === self::CodeType_StartPrice;
    }

    /**
     * @return bool
     */
    public function isReservePrice()
    {
        return $this->_value === self::CodeType_ReservePrice;
    }

    /**
     * @return bool
     */
    public function isSoldOn()
    {
        return $this->_value === self::CodeType_SoldOn;
    }

    /**
     * @return bool
     */
    public function isShippingCost()
    {
        return $this->_value === self::CodeType_ShippingCost;
    }

    /**
     * @return bool
     */
    public function isListedOn()
    {
        return $this->_value === self::CodeType_ListedOn;
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

SellingManagerSoldListingsSortTypeCodeType::_register();
