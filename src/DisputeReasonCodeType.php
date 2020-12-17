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
 * Enumerated type that contains the top-level reasons for a buyer or seller to create a
 * case against one another. These values are specified in the
 * 
 * DisputeReason
 * field of
 * AddDispute
 * , and are returned
 * in the
 * GetUserDisputes
 * and
 * GetDispute
 * calls.
 * The
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
class DisputeReasonCodeType extends EbatNs_EnumType
{
    const TAG = 'DisputeReasonCodeType';
    const NAME = 'DisputeReasonCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * The seller has opened a case against the buyer because the buyer has not paid for
     * the order line item. A seller can open an <i>Unpaid Item</i> case as early as two days after
     * the end of the auction listing. An exception to this rule occurs when the seller
     * allows combined payment orders. If the seller does allow the buyer to combine orders
     * and make one payment for those orders, the seller would not be able to open an Unpaid
     * Item case until after the time period to combine orders expires.
     **/
    const CodeType_BuyerHasNotPaid = 'BuyerHasNotPaid';

    /**
     * With the mutual consent of the buyer, the seller is canceling the order line item.
     **/
    const CodeType_TransactionMutuallyCanceled = 'TransactionMutuallyCanceled';

    /**
     * The buyer has opened a case against the seller because the item has not been
     * received by the buyer. A buyer can open an <i>Item Not Received</i> case after the
     * Estimated Delivery Date of the item has passed, or 7 days after payment if the
     * Estimated Delivery Date wasn't given by the seller. This value cannot be used in
     * 
     * AddDispute
     * .
     **/
    const CodeType_ItemNotReceived = 'ItemNotReceived';

    /**
     * The buyer has opened a case against the seller because the item was received but
     * does not match the item description in the listing. A buyer can open an <i>Item
     * Significantly Not As Described</i> case immediately after receiving the item. This value
     * cannot be used in
     * AddDispute
     * .
     **/
    const CodeType_SignificantlyNotAsDescribed = 'SignificantlyNotAsDescribed';

    /**
     * The item was returned but no refund was given. This value cannot be used in
     * 
     * AddDispute
     * .
     **/
    const CodeType_NoRefund = 'NoRefund';

    /**
     * Item was returned and seller was not paid. This value cannot be used in
     * 
     * AddDispute
     * .
     **/
    const CodeType_ReturnPolicyUnpaidItem = 'ReturnPolicyUnpaidItem';

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
     * @return DisputeReasonCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param DisputeReasonCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isBuyerHasNotPaid()
    {
        return $this->_value === self::CodeType_BuyerHasNotPaid;
    }

    /**
     * @return bool
     */
    public function isTransactionMutuallyCanceled()
    {
        return $this->_value === self::CodeType_TransactionMutuallyCanceled;
    }

    /**
     * @return bool
     */
    public function isItemNotReceived()
    {
        return $this->_value === self::CodeType_ItemNotReceived;
    }

    /**
     * @return bool
     */
    public function isSignificantlyNotAsDescribed()
    {
        return $this->_value === self::CodeType_SignificantlyNotAsDescribed;
    }

    /**
     * @return bool
     */
    public function isNoRefund()
    {
        return $this->_value === self::CodeType_NoRefund;
    }

    /**
     * @return bool
     */
    public function isReturnPolicyUnpaidItem()
    {
        return $this->_value === self::CodeType_ReturnPolicyUnpaidItem;
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

DisputeReasonCodeType::_register();
