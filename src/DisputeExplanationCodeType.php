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
 * Enumerated type that contains the explanations for a buyer or seller opening a case
 * against one another. These values are specified in the
 * DisputeExplanation
 * field of
 * AddDispute
 * , and are returned in the
 * 
 * GetUserDisputes
 * and
 * GetDispute
 * calls. The
 * 
 * DisputeReason
 * value will dictate what
 * 
 * DisputeExplanation
 * values that can be used/returned.
 * 
 * <span class="tablenote"><strong>Note:</strong>
 * The dispute calls in the Trading API are not compatible with 'Item Not Received' or 'Significantly Not As
 * Described' cases initiated by buyers through the eBay Money Back Guarantee program. The <a
 * href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to
 * retrieve and/or respond to eBay Money Back Guarantee cases programmatically.
 * </span>
 **/
class DisputeExplanationCodeType extends EbatNs_EnumType
{
    const TAG = 'DisputeExplanationCodeType';
    const NAME = 'DisputeExplanationCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the buyer has not paid for the order line item, and has
     * not responded to the seller regarding payment. This value is allowed when the
     * 
     * DisputeReason
     * value is
     * BuyerHasNotPaid
     * .
     **/
    const CodeType_BuyerHasNotResponded = 'BuyerHasNotResponded';

    /**
     * This value indicates that the buyer has not paid for the order line item, and
     * according to the seller, has refused to pay for the order line item. This value is
     * allowed when the
     * DisputeReason
     * value is
     * 
     * BuyerHasNotPaid
     * .
     **/
    const CodeType_BuyerRefusedToPay = 'BuyerRefusedToPay';

    /**
     * This value indicates that the buyer has not paid for the order line item, and
     * is not cleared by eBay to pay. This value is allowed when the
     * 
     * DisputeReason
     * value is
     * 
     * BuyerHasNotPaid
     * .
     **/
    const CodeType_BuyerNotClearedToPay = 'BuyerNotClearedToPay';

    /**
     * This value indicates that the buyer has returned the item, and seller has agreed to
     * cancel the order and issue a refund to the buyer. This value is allowed when the
     * 
     * DisputeReason
     * value is
     * TransactionMutuallyCanceled
     * .
     **/
    const CodeType_BuyerReturnedItemForRefund = 'BuyerReturnedItemForRefund';

    /**
     * This value indicates that the buyer and seller were unable to resolve a disagreement
     * over terms, and the seller is willing to cancel the order line item. This value is allowed when the
     * 
     * DisputeReason
     * value is
     * TransactionMutuallyCanceled
     * .
     **/
    const CodeType_UnableToResolveTerms = 'UnableToResolveTerms';

    /**
     * This value indicates that the buyer no longer wants the item (buyer remorse), and
     * the seller is willing to cancel the order line item. This value is allowed when the
     * 
     * DisputeReason
     * value is
     * 
     * TransactionMutuallyCanceled
     * .
     **/
    const CodeType_BuyerNoLongerWantsItem = 'BuyerNoLongerWantsItem';

    /**
     * This value indicates that the buyer made a mistake by purchasing the item, and
     * the seller is willing to cancel the order line item. This value is allowed when the
     * 
     * DisputeReason
     * value is
     * 
     * TransactionMutuallyCanceled
     * .
     **/
    const CodeType_BuyerPurchasingMistake = 'BuyerPurchasingMistake';

    /**
     * This value is deprecated, and should not be used.
     **/
    const CodeType_ShipCountryNotSupported = 'ShipCountryNotSupported';

    /**
     * This value indicates that the buyer is requesting shipment of the item to an
     * unconfirmed (not on file with eBay) address. This value is allowed when the
     * 
     * DisputeReason
     * value is
     * BuyerHasNotPaid
     * or
     * 
     * TransactionMutuallyCanceled
     * .
     **/
    const CodeType_ShippingAddressNotConfirmed = 'ShippingAddressNotConfirmed';

    /**
     * This value is deprecated, and should not be used.
     **/
    const CodeType_PaymentMethodNotSupported = 'PaymentMethodNotSupported';

    /**
     * This value is deprecated.
     **/
    const CodeType_BuyerNoLongerRegistered = 'BuyerNoLongerRegistered';

    /**
     * This value can be used when no other explanation in
     * DisputeExplanationCodeType
     * is appropriate for the situation. This value is
     * allowed when the
     * DisputeReason
     * value is
     * 
     * BuyerHasNotPaid
     * or
     * 
     * TransactionMutuallyCanceled
     * .
     **/
    const CodeType_OtherExplanation = 'OtherExplanation';

    /**
     * This value can be used when no other explanation in
     * 
     * DisputeExplanationCodeType
     * is appropriate for the situation. This
     * value is allowed when the
     * DisputeReason
     * value is
     * 
     * ItemNotReceived
     * or
     * SignificantlyNotAsDescribed
     * .
     * This value cannot be used in
     * AddDispute
     * .
     **/
    const CodeType_Unspecified = 'Unspecified';

    /**
     * This value indicates that the Unpaid Item case was opened by eBay through the Unpaid
     * Item Assistance mechanism. This value cannot be used in
     * 
     * AddDispute
     * .
     **/
    const CodeType_UPIAssistance = 'UPIAssistance';

    /**
     * This value indicates that the buyer has not paid the seller for the order line item,
     * or has paid the seller but the payment has not cleared. This value is allowed when
     * the
     * DisputeReason
     * value is
     * BuyerHasNotPaid
     * .
     **/
    const CodeType_BuyerPaymentNotReceivedOrCleared = 'BuyerPaymentNotReceivedOrCleared';

    /**
     * This value indicates that the buyer is requesting shipment of the item to a country
     * that is on the seller's ship-to exclusion list. This value is allowed when the
     * 
     * DisputeReason
     * value is
     * BuyerHasNotPaid
     * or
     * 
     * TransactionMutuallyCanceled
     * .
     **/
    const CodeType_SellerDoesntShipToCountry = 'SellerDoesntShipToCountry';

    /**
     * This value indicates that the buyer has not paid for the order line item. This value
     * is allowed when the
     * DisputeReason
     * value is
     * 
     * BuyerHasNotPaid
     * .
     **/
    const CodeType_BuyerNotPaid = 'BuyerNotPaid';

    /**
     * This value indicates that the Unpaid Item case was opened by eBay through the Unpaid
     * Item Assistance mechanism, and then was subsequently converted to a manual dispute,
     * either by the seller or by eBay. This value cannot be used in
     * 
     * AddDispute
     * .
     **/
    const CodeType_UPIAssistanceDisabled = 'UPIAssistanceDisabled';

    /**
     * This value indicates that the seller ran out of stock on the item, cannot fulfill
     * the order, and has to cancel the order line item. This value is allowed when the
     * 
     * DisputeReason
     * value is
     * 
     * TransactionMutuallyCanceled
     * .
     **/
    const CodeType_SellerRanOutOfStock = 'SellerRanOutOfStock';

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
     * @return DisputeExplanationCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param DisputeExplanationCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isBuyerHasNotResponded()
    {
        return $this->_value === self::CodeType_BuyerHasNotResponded;
    }

    /**
     * @return bool
     */
    public function isBuyerRefusedToPay()
    {
        return $this->_value === self::CodeType_BuyerRefusedToPay;
    }

    /**
     * @return bool
     */
    public function isBuyerNotClearedToPay()
    {
        return $this->_value === self::CodeType_BuyerNotClearedToPay;
    }

    /**
     * @return bool
     */
    public function isBuyerReturnedItemForRefund()
    {
        return $this->_value === self::CodeType_BuyerReturnedItemForRefund;
    }

    /**
     * @return bool
     */
    public function isUnableToResolveTerms()
    {
        return $this->_value === self::CodeType_UnableToResolveTerms;
    }

    /**
     * @return bool
     */
    public function isBuyerNoLongerWantsItem()
    {
        return $this->_value === self::CodeType_BuyerNoLongerWantsItem;
    }

    /**
     * @return bool
     */
    public function isBuyerPurchasingMistake()
    {
        return $this->_value === self::CodeType_BuyerPurchasingMistake;
    }

    /**
     * @return bool
     */
    public function isShipCountryNotSupported()
    {
        return $this->_value === self::CodeType_ShipCountryNotSupported;
    }

    /**
     * @return bool
     */
    public function isShippingAddressNotConfirmed()
    {
        return $this->_value === self::CodeType_ShippingAddressNotConfirmed;
    }

    /**
     * @return bool
     */
    public function isPaymentMethodNotSupported()
    {
        return $this->_value === self::CodeType_PaymentMethodNotSupported;
    }

    /**
     * @return bool
     */
    public function isBuyerNoLongerRegistered()
    {
        return $this->_value === self::CodeType_BuyerNoLongerRegistered;
    }

    /**
     * @return bool
     */
    public function isOtherExplanation()
    {
        return $this->_value === self::CodeType_OtherExplanation;
    }

    /**
     * @return bool
     */
    public function isUnspecified()
    {
        return $this->_value === self::CodeType_Unspecified;
    }

    /**
     * @return bool
     */
    public function isUPIAssistance()
    {
        return $this->_value === self::CodeType_UPIAssistance;
    }

    /**
     * @return bool
     */
    public function isBuyerPaymentNotReceivedOrCleared()
    {
        return $this->_value === self::CodeType_BuyerPaymentNotReceivedOrCleared;
    }

    /**
     * @return bool
     */
    public function isSellerDoesntShipToCountry()
    {
        return $this->_value === self::CodeType_SellerDoesntShipToCountry;
    }

    /**
     * @return bool
     */
    public function isBuyerNotPaid()
    {
        return $this->_value === self::CodeType_BuyerNotPaid;
    }

    /**
     * @return bool
     */
    public function isUPIAssistanceDisabled()
    {
        return $this->_value === self::CodeType_UPIAssistanceDisabled;
    }

    /**
     * @return bool
     */
    public function isSellerRanOutOfStock()
    {
        return $this->_value === self::CodeType_SellerRanOutOfStock;
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

DisputeExplanationCodeType::_register();
