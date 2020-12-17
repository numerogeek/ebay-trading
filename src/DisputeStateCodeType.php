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
 * Enumerated type that defines the possible states of an order dispute between buyer and seller.
 * 
 * <span class="tablenote"><strong>Note:</strong>
 * 'Item Not Received' or 'Significantly Not As Described' cases, initiated by buyers through the eBay Money
 * Back Guarantee program, are not returned with
 * GetDispute
 * or
 * GetUserDisputes
 * . The <a
 * href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a>
 * method of the <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a>
 * is used to retrieve Money Back Guarantee cases programmatically.
 * </span>
 **/
class DisputeStateCodeType extends EbatNs_EnumType
{
    const TAG = 'DisputeStateCodeType';
    const NAME = 'DisputeStateCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that the dispute is currently in a locked state, and cannot be updated by any
     * user.
     **/
    const CodeType_Locked = 'Locked';

    /**
     * This enumeration value indicates that the dispute is closed. In some cases, a closed case can be reversed with
     * the
     * SellerReverseDispute
     * call.
     **/
    const CodeType_Closed = 'Closed';

    /**
     * This enumeration value indicates that eBay sent the buyer an Unpaid Item Reminder with a Pay Now option, and is
     * waiting for the buyer's first response.
     **/
    const CodeType_BuyerFirstResponsePayOption = 'BuyerFirstResponsePayOption';

    /**
     * This enumeration value indicates that eBay sent the buyer an Unpaid Item Reminder, but without a Pay Now option,
     * and is waiting for the buyer's first response.
     **/
    const CodeType_BuyerFirstResponseNoPayOption = 'BuyerFirstResponseNoPayOption';

    /**
     * This enumeration value indicates that eBay sent the buyer an Unpaid Item Reminder with a Pay Now option, was
     * waiting for the buyer's first response, but the buyer has failed to respond to this reminder within the 7-day
     * grace period.
     **/
    const CodeType_BuyerFirstResponsePayOptionLateResponse = 'BuyerFirstResponsePayOptionLateResponse';

    /**
     * This enumeration value indicates that eBay sent the buyer an Unpaid Item Reminder without a Pay Now option, was
     * waiting for the buyer's first response, but the buyer has failed to respond to this reminder within the 7-day
     * grace period.
     **/
    const CodeType_BuyerFirstResponseNoPayOptionLateResponse = 'BuyerFirstResponseNoPayOptionLateResponse';

    /**
     * This enumeration value indicates that the buyer and seller have communicated, and eBay offered the buyer a Pay
     * Now option.
     **/
    const CodeType_MutualCommunicationPayOption = 'MutualCommunicationPayOption';

    /**
     * This enumeration value indicates that the buyer and seller have communicated, but eBay has not offered the buyer
     * a Pay Now option.
     **/
    const CodeType_MutualCommunicationNoPayOption = 'MutualCommunicationNoPayOption';

    /**
     * This enumeration value indicates that the dispute is pending resolution. A dispute cannot be closed by the buyer
     * or seller when it is in this state.
     **/
    const CodeType_PendingResolve = 'PendingResolve';

    /**
     * This enumeration value indicates that the buyer and seller have mutually agreed to cancel the transaction within
     * the grace period.
     **/
    const CodeType_MutualWithdrawalAgreement = 'MutualWithdrawalAgreement';

    /**
     * This enumeration value indicates that the buyer and seller have mutually agreed to cancel the transaction, but
     * the grace period has expired.
     **/
    const CodeType_MutualWithdrawalAgreementLate = 'MutualWithdrawalAgreementLate';

    /**
     * This enumeration value indicates that the buyer filed an Item Not Received dispute through PayPal account, and
     * the seller has not yet responded. A seller may respond to a case in this state by using the
     * AddDisputeResponse
     * call and setting the
     * DisputeActivity
     * value to <code>SellerOffersRefund</code>, <code>SellerShippedItem</code>, or <code>SellerComment</code>.
     **/
    const CodeType_NotReceivedNoSellerResponse = 'NotReceivedNoSellerResponse';

    /**
     * This enumeration value indicates that the buyer filed an Item Not As Described dispute through PayPal account,
     * and the seller has not yet responded. A seller may respond to a case in this state by using the
     * AddDisputeResponse
     * call and setting the
     * DisputeActivity
     * value to <code>SellerOffersRefund</code> or <code>SellerComment</code>.
     **/
    const CodeType_NotAsDescribedNoSellerResponse = 'NotAsDescribedNoSellerResponse';

    /**
     * This enumeration value indicates that the buyer filed an Item Not Received dispute through PayPal account, and
     * the buyer and seller have communicated about the issue. A seller may respond to a case in this state by using the
     * AddDisputeResponse
     * call and setting the
     * DisputeActivity
     * value to <code>SellerOffersRefund</code>, <code>SellerShippedItem</code>, or <code>SellerComment</code>.
     **/
    const CodeType_NotReceivedMutualCommunication = 'NotReceivedMutualCommunication';

    /**
     * This enumeration value indicates that the buyer filed an Item Not As Described dispute through PayPal account,
     * and the buyer and seller have communicated about the issue. A seller may respond to a case in this state by using
     * the
     * AddDisputeResponse
     * call and setting the
     * DisputeActivity
     * value to <code>SellerOffersRefund</code>.
     **/
    const CodeType_NotAsDescribedMutualCommunication = 'NotAsDescribedMutualCommunication';

    /**
     * This enumeration value indicates that the seller filed an Unpaid Item dispute, and the seller says mutual
     * agreement has been reached and is
     * waiting for the buyer to confirm, or the buyer is returning the item
     * to the seller.
     **/
    const CodeType_MutualAgreementOrBuyerReturningItem = 'MutualAgreementOrBuyerReturningItem';

    /**
     * This enumeration value indicates that the claim was assigned to an adjuster.
     **/
    const CodeType_ClaimOpened = 'ClaimOpened';

    /**
     * This enumeration value indicates that the buyer was contacted by eBay and asked to submit paperwork to support
     * the claim.
     **/
    const CodeType_NoDocumentation = 'NoDocumentation';

    /**
     * This enumeration value indicates that the claim was closed due to buyer not responding to verification, or was
     * missing paperwork.
     **/
    const CodeType_ClaimClosed = 'ClaimClosed';

    /**
     * This enumeration value indicates that the buyer's claim was denied.
     **/
    const CodeType_ClaimDenied = 'ClaimDenied';

    /**
     * This enumeration value indicates that paperwork was received from the buyer and the claim is being investigated.
     **/
    const CodeType_ClaimPending = 'ClaimPending';

    /**
     * This enumeration value indicates that the buyer's claim was approved for reimbursement and was sent to accounts
     * payable for payment.
     **/
    const CodeType_ClaimPaymentPending = 'ClaimPaymentPending';

    /**
     * This enumeration value indicates that the buyer was reimbursed for the claim.
     **/
    const CodeType_ClaimPaid = 'ClaimPaid';

    /**
     * This enumeration value indicates that the issue has been resolved due to the seller sending the item or refunding
     * the buyer.
     **/
    const CodeType_ClaimResolved = 'ClaimResolved';

    /**
     * This enumeration value indicates that the claim was submitted via Web.
     **/
    const CodeType_ClaimSubmitted = 'ClaimSubmitted';

    /**
     * This enumeration value indicates that the Unpaid Item dispute is open.
     **/
    const CodeType_UnpaidItemOpen = 'UnpaidItemOpen';

    /**
     * This enumeration value indicates that the Unpaid Item dispute filed by the Unpaid Item Assistance mechanism was
     * disabled by eBay (for example, eBay detected that payment was initiated and the seller needs to manually handle
     * this dispute).
     **/
    const CodeType_UPIAssistanceDisabledByeBay = 'UPIAssistanceDisabledByeBay';

    /**
     * This enumeration value indicates that the Unpaid Item dispute filed by the Unpaid Item Assistance mechanism was
     * disabled by the seller (e.g. the buyer and seller have communicated about payment and the seller wishes to extend
     * the time for payment and not let the automatic process close the dispute automatically).
     **/
    const CodeType_UPIAssistanceDisabledBySeller = 'UPIAssistanceDisabledBySeller';

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
     * @return DisputeStateCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param DisputeStateCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isLocked()
    {
        return $this->_value === self::CodeType_Locked;
    }

    /**
     * @return bool
     */
    public function isClosed()
    {
        return $this->_value === self::CodeType_Closed;
    }

    /**
     * @return bool
     */
    public function isBuyerFirstResponsePayOption()
    {
        return $this->_value === self::CodeType_BuyerFirstResponsePayOption;
    }

    /**
     * @return bool
     */
    public function isBuyerFirstResponseNoPayOption()
    {
        return $this->_value === self::CodeType_BuyerFirstResponseNoPayOption;
    }

    /**
     * @return bool
     */
    public function isBuyerFirstResponsePayOptionLateResponse()
    {
        return $this->_value === self::CodeType_BuyerFirstResponsePayOptionLateResponse;
    }

    /**
     * @return bool
     */
    public function isBuyerFirstResponseNoPayOptionLateResponse()
    {
        return $this->_value === self::CodeType_BuyerFirstResponseNoPayOptionLateResponse;
    }

    /**
     * @return bool
     */
    public function isMutualCommunicationPayOption()
    {
        return $this->_value === self::CodeType_MutualCommunicationPayOption;
    }

    /**
     * @return bool
     */
    public function isMutualCommunicationNoPayOption()
    {
        return $this->_value === self::CodeType_MutualCommunicationNoPayOption;
    }

    /**
     * @return bool
     */
    public function isPendingResolve()
    {
        return $this->_value === self::CodeType_PendingResolve;
    }

    /**
     * @return bool
     */
    public function isMutualWithdrawalAgreement()
    {
        return $this->_value === self::CodeType_MutualWithdrawalAgreement;
    }

    /**
     * @return bool
     */
    public function isMutualWithdrawalAgreementLate()
    {
        return $this->_value === self::CodeType_MutualWithdrawalAgreementLate;
    }

    /**
     * @return bool
     */
    public function isNotReceivedNoSellerResponse()
    {
        return $this->_value === self::CodeType_NotReceivedNoSellerResponse;
    }

    /**
     * @return bool
     */
    public function isNotAsDescribedNoSellerResponse()
    {
        return $this->_value === self::CodeType_NotAsDescribedNoSellerResponse;
    }

    /**
     * @return bool
     */
    public function isNotReceivedMutualCommunication()
    {
        return $this->_value === self::CodeType_NotReceivedMutualCommunication;
    }

    /**
     * @return bool
     */
    public function isNotAsDescribedMutualCommunication()
    {
        return $this->_value === self::CodeType_NotAsDescribedMutualCommunication;
    }

    /**
     * @return bool
     */
    public function isMutualAgreementOrBuyerReturningItem()
    {
        return $this->_value === self::CodeType_MutualAgreementOrBuyerReturningItem;
    }

    /**
     * @return bool
     */
    public function isClaimOpened()
    {
        return $this->_value === self::CodeType_ClaimOpened;
    }

    /**
     * @return bool
     */
    public function isNoDocumentation()
    {
        return $this->_value === self::CodeType_NoDocumentation;
    }

    /**
     * @return bool
     */
    public function isClaimClosed()
    {
        return $this->_value === self::CodeType_ClaimClosed;
    }

    /**
     * @return bool
     */
    public function isClaimDenied()
    {
        return $this->_value === self::CodeType_ClaimDenied;
    }

    /**
     * @return bool
     */
    public function isClaimPending()
    {
        return $this->_value === self::CodeType_ClaimPending;
    }

    /**
     * @return bool
     */
    public function isClaimPaymentPending()
    {
        return $this->_value === self::CodeType_ClaimPaymentPending;
    }

    /**
     * @return bool
     */
    public function isClaimPaid()
    {
        return $this->_value === self::CodeType_ClaimPaid;
    }

    /**
     * @return bool
     */
    public function isClaimResolved()
    {
        return $this->_value === self::CodeType_ClaimResolved;
    }

    /**
     * @return bool
     */
    public function isClaimSubmitted()
    {
        return $this->_value === self::CodeType_ClaimSubmitted;
    }

    /**
     * @return bool
     */
    public function isUnpaidItemOpen()
    {
        return $this->_value === self::CodeType_UnpaidItemOpen;
    }

    /**
     * @return bool
     */
    public function isUPIAssistanceDisabledByeBay()
    {
        return $this->_value === self::CodeType_UPIAssistanceDisabledByeBay;
    }

    /**
     * @return bool
     */
    public function isUPIAssistanceDisabledBySeller()
    {
        return $this->_value === self::CodeType_UPIAssistanceDisabledBySeller;
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

DisputeStateCodeType::_register();
