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
 * Indicates the filters for Selling Manager sold listings.
 **/
class SellingManagerSoldListingsPropertyTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'SellingManagerSoldListingsPropertyTypeCodeType';
    const NAME = 'SellingManagerSoldListingsPropertyTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Item is not paid and not shipped.
     **/
    const CodeType_NotPaidNotShipped = 'NotPaidNotShipped';

    /**
     * Item is paid but not shipped.
     **/
    const CodeType_PaidNotShipped = 'PaidNotShipped';

    /**
     * Item is paid but not shipped.
     **/
    const CodeType_PrintShippingLabel = 'PrintShippingLabel';

    /**
     * Item is paid for and is shipped.
     **/
    const CodeType_PaidShipped = 'PaidShipped';

    /**
     * An alert has been issued about a listing that is paid with no feedback left.
     **/
    const CodeType_PaidNoFeedback = 'PaidNoFeedback';

    /**
     * Payment Reminder emails not sent due to system error.
     **/
    const CodeType_PaymentReminderSendError = 'PaymentReminderSendError';

    /**
     * Payment received notification not sent due to system error.
     **/
    const CodeType_PaymentReceivedNotificationSendError = 'PaymentReceivedNotificationSendError';

    /**
     * Request shipping address emails not sent due to system error.
     **/
    const CodeType_RequestForShippingAddressSendError = 'RequestForShippingAddressSendError';

    /**
     * Request shipping address emails not sent due to system error.
     **/
    const CodeType_ShippingNotificationSendError = 'ShippingNotificationSendError';

    /**
     * Personalized emails not sent due to system error.
     **/
    const CodeType_PersonalizedEmailsSendError = 'PersonalizedEmailsSendError';

    /**
     * Winning Buyer Notification not sent due to system error.
     **/
    const CodeType_WinningBuyerNotificationSendError = 'WinningBuyerNotificationSendError';

    /**
     * Final value fee credit requests can be filed.
     **/
    const CodeType_FeeCreditRequest = 'FeeCreditRequest';

    /**
     * If true, indicates that the PayPal Payment Received alert has been issued.
     **/
    const CodeType_PayPalPayment = 'PayPalPayment';

    /**
     * Automated feedback message is not sent.
     **/
    const CodeType_FeedbackMessageNotSent = 'FeedbackMessageNotSent';

    /**
     * Feedback Reminder emails not sent due to system error.
     **/
    const CodeType_FeedbackReminderSendError = 'FeedbackReminderSendError';

    /**
     * Item is not shipped.
     **/
    const CodeType_NotShipped = 'NotShipped';

    /**
     * Listing eligible for unpaid item reminder
     **/
    const CodeType_UnpaidItemReminder = 'UnpaidItemReminder';

    /**
     * Escrow status is Cancelled.
     **/
    const CodeType_EscrowCancelled = 'EscrowCancelled';

    /**
     * Escrow status is Completed.
     **/
    const CodeType_EscrowCompleted = 'EscrowCompleted';

    /**
     * Escrow status is Initiated.
     **/
    const CodeType_EscrowInitiated = 'EscrowInitiated';

    /**
     * Escrow status is in refund state.
     **/
    const CodeType_EscrowManageRefund = 'EscrowManageRefund';

    /**
     * Item is shipped and Escrow status is in Release payment.
     **/
    const CodeType_EscrowReleasePayment = 'EscrowReleasePayment';

    /**
     * Payment is confirmed and item can be shipped to buyer.
     **/
    const CodeType_EscrowShipToBuyer = 'EscrowShipToBuyer';

    /**
     * All Escrow states.
     **/
    const CodeType_EscrowSoldAll = 'EscrowSoldAll';

    /**
     * Item is shipped and feedback is not yet received.
     **/
    const CodeType_ShippedAndAwaitingFeedback = 'ShippedAndAwaitingFeedback';

    /**
     * New international sale.
     **/
    const CodeType_InternationalSale = 'InternationalSale';

    /**
     * Charity filter.
     **/
    const CodeType_eBayGivingWorksDonationOwed = 'eBayGivingWorksDonationOwed';

    /**
     * Payment is overdue.
     **/
    const CodeType_PaymentOverDue = 'PaymentOverDue';

    /**
     * Payment is done with PaisaPay Escrow.
     **/
    const CodeType_PadiWithPaisaPayEscrow = 'PadiWithPaisaPayEscrow';

    /**
     * Failed to send custom email template 1.
     **/
    const CodeType_CustomEmailTemplate1SendError = 'CustomEmailTemplate1SendError';

    /**
     * Failed to send custom email template 2.
     **/
    const CodeType_CustomEmailTemplate2SendError = 'CustomEmailTemplate2SendError';

    /**
     * Failed to send custom email template 3.
     **/
    const CodeType_CustomEmailTemplate3SendError = 'CustomEmailTemplate3SendError';

    /**
     * Failed to send custom email template 4.
     **/
    const CodeType_CustomEmailTemplate4SendError = 'CustomEmailTemplate4SendError';

    /**
     * Failed to send custom email template 5.
     **/
    const CodeType_CustomEmailTemplate5SendError = 'CustomEmailTemplate5SendError';

    /**
     * Failed to send custom email template 6.
     **/
    const CodeType_CustomEmailTemplate6SendError = 'CustomEmailTemplate6SendError';

    /**
     * Failed to send custom email template 7.
     **/
    const CodeType_CustomEmailTemplate7SendError = 'CustomEmailTemplate7SendError';

    /**
     * Failed to send custom email template 8.
     **/
    const CodeType_CustomEmailTemplate8SendError = 'CustomEmailTemplate8SendError';

    /**
     * Failed to send custom email template 9.
     **/
    const CodeType_CustomEmailTemplate9SendError = 'CustomEmailTemplate9SendError';

    /**
     * Failed to send custom email template 10.
     **/
    const CodeType_CustomEmailTemplate10SendError = 'CustomEmailTemplate10SendError';

    /**
     * Failed to send custom email template 11.
     **/
    const CodeType_CustomEmailTemplate11SendError = 'CustomEmailTemplate11SendError';

    /**
     * Failed to send custom email template 12.
     **/
    const CodeType_CustomEmailTemplate12SendError = 'CustomEmailTemplate12SendError';

    /**
     * Failed to send custom email template 13.
     **/
    const CodeType_CustomEmailTemplate13SendError = 'CustomEmailTemplate13SendError';

    /**
     * Failed to send custom email template 14.
     **/
    const CodeType_CustomEmailTemplate14SendError = 'CustomEmailTemplate14SendError';

    /**
     * Failed to send custom email template 15.
     **/
    const CodeType_CustomEmailTemplate15SendError = 'CustomEmailTemplate15SendError';

    /**
     * Failed to send custom email template 16.
     **/
    const CodeType_CustomEmailTemplate16SendError = 'CustomEmailTemplate16SendError';

    /**
     * Failed to send custom email template 17.
     **/
    const CodeType_CustomEmailTemplate17SendError = 'CustomEmailTemplate17SendError';

    /**
     * Failed to send custom email template 18.
     **/
    const CodeType_CustomEmailTemplate18SendError = 'CustomEmailTemplate18SendError';

    /**
     * Failed to send custom email template 19.
     **/
    const CodeType_CustomEmailTemplate19SendError = 'CustomEmailTemplate19SendError';

    /**
     * Failed to send custom email template 20.
     **/
    const CodeType_CustomEmailTemplate20SendError = 'CustomEmailTemplate20SendError';

    /**
     * Reserved for future use. If a buyer requests to return an item, the seller's response is required.
     **/
    const CodeType_ResponseRequiredForReturnCase = 'ResponseRequiredForReturnCase';

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
     * @return SellingManagerSoldListingsPropertyTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SellingManagerSoldListingsPropertyTypeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isNotPaidNotShipped()
    {
        return $this->_value === self::CodeType_NotPaidNotShipped;
    }

    /**
     * @return bool
     */
    public function isPaidNotShipped()
    {
        return $this->_value === self::CodeType_PaidNotShipped;
    }

    /**
     * @return bool
     */
    public function isPrintShippingLabel()
    {
        return $this->_value === self::CodeType_PrintShippingLabel;
    }

    /**
     * @return bool
     */
    public function isPaidShipped()
    {
        return $this->_value === self::CodeType_PaidShipped;
    }

    /**
     * @return bool
     */
    public function isPaidNoFeedback()
    {
        return $this->_value === self::CodeType_PaidNoFeedback;
    }

    /**
     * @return bool
     */
    public function isPaymentReminderSendError()
    {
        return $this->_value === self::CodeType_PaymentReminderSendError;
    }

    /**
     * @return bool
     */
    public function isPaymentReceivedNotificationSendError()
    {
        return $this->_value === self::CodeType_PaymentReceivedNotificationSendError;
    }

    /**
     * @return bool
     */
    public function isRequestForShippingAddressSendError()
    {
        return $this->_value === self::CodeType_RequestForShippingAddressSendError;
    }

    /**
     * @return bool
     */
    public function isShippingNotificationSendError()
    {
        return $this->_value === self::CodeType_ShippingNotificationSendError;
    }

    /**
     * @return bool
     */
    public function isPersonalizedEmailsSendError()
    {
        return $this->_value === self::CodeType_PersonalizedEmailsSendError;
    }

    /**
     * @return bool
     */
    public function isWinningBuyerNotificationSendError()
    {
        return $this->_value === self::CodeType_WinningBuyerNotificationSendError;
    }

    /**
     * @return bool
     */
    public function isFeeCreditRequest()
    {
        return $this->_value === self::CodeType_FeeCreditRequest;
    }

    /**
     * @return bool
     */
    public function isPayPalPayment()
    {
        return $this->_value === self::CodeType_PayPalPayment;
    }

    /**
     * @return bool
     */
    public function isFeedbackMessageNotSent()
    {
        return $this->_value === self::CodeType_FeedbackMessageNotSent;
    }

    /**
     * @return bool
     */
    public function isFeedbackReminderSendError()
    {
        return $this->_value === self::CodeType_FeedbackReminderSendError;
    }

    /**
     * @return bool
     */
    public function isNotShipped()
    {
        return $this->_value === self::CodeType_NotShipped;
    }

    /**
     * @return bool
     */
    public function isUnpaidItemReminder()
    {
        return $this->_value === self::CodeType_UnpaidItemReminder;
    }

    /**
     * @return bool
     */
    public function isEscrowCancelled()
    {
        return $this->_value === self::CodeType_EscrowCancelled;
    }

    /**
     * @return bool
     */
    public function isEscrowCompleted()
    {
        return $this->_value === self::CodeType_EscrowCompleted;
    }

    /**
     * @return bool
     */
    public function isEscrowInitiated()
    {
        return $this->_value === self::CodeType_EscrowInitiated;
    }

    /**
     * @return bool
     */
    public function isEscrowManageRefund()
    {
        return $this->_value === self::CodeType_EscrowManageRefund;
    }

    /**
     * @return bool
     */
    public function isEscrowReleasePayment()
    {
        return $this->_value === self::CodeType_EscrowReleasePayment;
    }

    /**
     * @return bool
     */
    public function isEscrowShipToBuyer()
    {
        return $this->_value === self::CodeType_EscrowShipToBuyer;
    }

    /**
     * @return bool
     */
    public function isEscrowSoldAll()
    {
        return $this->_value === self::CodeType_EscrowSoldAll;
    }

    /**
     * @return bool
     */
    public function isShippedAndAwaitingFeedback()
    {
        return $this->_value === self::CodeType_ShippedAndAwaitingFeedback;
    }

    /**
     * @return bool
     */
    public function isInternationalSale()
    {
        return $this->_value === self::CodeType_InternationalSale;
    }

    /**
     * @return bool
     */
    public function isEBayGivingWorksDonationOwed()
    {
        return $this->_value === self::CodeType_eBayGivingWorksDonationOwed;
    }

    /**
     * @return bool
     */
    public function isPaymentOverDue()
    {
        return $this->_value === self::CodeType_PaymentOverDue;
    }

    /**
     * @return bool
     */
    public function isPadiWithPaisaPayEscrow()
    {
        return $this->_value === self::CodeType_PadiWithPaisaPayEscrow;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate1SendError()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate1SendError;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate2SendError()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate2SendError;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate3SendError()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate3SendError;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate4SendError()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate4SendError;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate5SendError()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate5SendError;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate6SendError()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate6SendError;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate7SendError()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate7SendError;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate8SendError()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate8SendError;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate9SendError()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate9SendError;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate10SendError()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate10SendError;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate11SendError()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate11SendError;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate12SendError()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate12SendError;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate13SendError()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate13SendError;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate14SendError()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate14SendError;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate15SendError()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate15SendError;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate16SendError()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate16SendError;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate17SendError()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate17SendError;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate18SendError()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate18SendError;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate19SendError()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate19SendError;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate20SendError()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate20SendError;
    }

    /**
     * @return bool
     */
    public function isResponseRequiredForReturnCase()
    {
        return $this->_value === self::CodeType_ResponseRequiredForReturnCase;
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

SellingManagerSoldListingsPropertyTypeCodeType::_register();
