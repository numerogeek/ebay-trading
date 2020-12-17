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
 * Specifies the payment status of an order, as
 * seen by the buyer and seller.
 **/
class PaidStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'PaidStatusCodeType';
    const NAME = 'PaidStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * The buyer has completed checkout, but eBay has not recognized that the buyer has paid for the order. It is
     * possible that the buyer has paid with an 'offline' payment method, but the order has not been marked as paid.
     **/
    const CodeType_NotPaid = 'NotPaid';

    /**
     * The buyer has not completed the checkout process and so has not made payment.
     **/
    const CodeType_BuyerHasNotCompletedCheckout = 'BuyerHasNotCompletedCheckout';

    /**
     * The buyer has made a PayPal payment, but the seller has not yet received it.
     **/
    const CodeType_PaymentPendingWithPayPal = 'PaymentPendingWithPayPal';

    /**
     * The buyer has made a PayPal payment, and the payment is complete.
     * But please also see the documentation for PaymentHoldStatus and its applicable values.
     * PaymentHoldStatus contains the current status of a hold on a PayPal payment.
     **/
    const CodeType_PaidWithPayPal = 'PaidWithPayPal';

    /**
     * The order is marked as paid by either the buyer or seller.
     **/
    const CodeType_MarkedAsPaid = 'MarkedAsPaid';

    /**
     * No longer an applicable value.
     **/
    const CodeType_PaymentPendingWithEscrow = 'PaymentPendingWithEscrow';

    /**
     * No longer an applicable value.
     **/
    const CodeType_PaidWithEscrow = 'PaidWithEscrow';

    /**
     * No longer an applicable value.
     **/
    const CodeType_EscrowPaymentCancelled = 'EscrowPaymentCancelled';

    /**
     * PaisaPay is a deprecated payment method, so this value is no longer applicable.
     **/
    const CodeType_PaymentPendingWithPaisaPay = 'PaymentPendingWithPaisaPay';

    /**
     * PaisaPay is a deprecated payment method, so this value is no longer applicable.
     **/
    const CodeType_PaidWithPaisaPay = 'PaidWithPaisaPay';

    /**
     * The buyer has made a payment other than PayPal, but the
     * payment is still being processed.
     **/
    const CodeType_PaymentPending = 'PaymentPending';

    /**
     * PaisaPay is a deprecated payment method, so this value is no longer applicable.
     **/
    const CodeType_PaymentPendingWithPaisaPayEscrow = 'PaymentPendingWithPaisaPayEscrow';

    /**
     * PaisaPay is a deprecated payment method, so this value is no longer applicable.
     **/
    const CodeType_PaidWithPaisaPayEscrow = 'PaidWithPaisaPayEscrow';

    /**
     * PaisaPay is a deprecated payment method, so this value is no longer applicable.
     **/
    const CodeType_PaisaPayNotPaid = 'PaisaPayNotPaid';

    /**
     * The buyer's payment was refunded.
     **/
    const CodeType_Refunded = 'Refunded';

    /**
     * The selected payment method is COD and the buyer will make the payment upon delivery.
     **/
    const CodeType_WaitingForCODPayment = 'WaitingForCODPayment';

    /**
     * The buyer has paid for the order with the COD payment method.
     **/
    const CodeType_PaidCOD = 'PaidCOD';

    /**
     * Reserved for future use.
     **/
    const CodeType_CustomCode = 'CustomCode';

    /**
     * The order has been paid for.
     **/
    const CodeType_Paid = 'Paid';

    /**
     * This value indicates that the buyer was offered the 'Pay Upon Invoice' option. The 'Pay Upon Invoice' option is
     * only available to eligible German buyers as part of Progressive Checkout on the German site. If a German buyer is
     * offered the 'Pay Upon Invoice' option, that buyer is not required to pay for the order until after receiving an
     * order invoice from the seller.
     **/
    const CodeType_PayUponInvoice = 'PayUponInvoice';
    
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
     * @return PaidStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PaidStatusCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isNotPaid()
    {
        return $this->_value === self::CodeType_NotPaid;
    }

    /**
     * @return bool
     */
    public function isBuyerHasNotCompletedCheckout()
    {
        return $this->_value === self::CodeType_BuyerHasNotCompletedCheckout;
    }

    /**
     * @return bool
     */
    public function isPaymentPendingWithPayPal()
    {
        return $this->_value === self::CodeType_PaymentPendingWithPayPal;
    }

    /**
     * @return bool
     */
    public function isPaidWithPayPal()
    {
        return $this->_value === self::CodeType_PaidWithPayPal;
    }

    /**
     * @return bool
     */
    public function isMarkedAsPaid()
    {
        return $this->_value === self::CodeType_MarkedAsPaid;
    }

    /**
     * @return bool
     */
    public function isPaymentPendingWithEscrow()
    {
        return $this->_value === self::CodeType_PaymentPendingWithEscrow;
    }

    /**
     * @return bool
     */
    public function isPaidWithEscrow()
    {
        return $this->_value === self::CodeType_PaidWithEscrow;
    }

    /**
     * @return bool
     */
    public function isEscrowPaymentCancelled()
    {
        return $this->_value === self::CodeType_EscrowPaymentCancelled;
    }

    /**
     * @return bool
     */
    public function isPaymentPendingWithPaisaPay()
    {
        return $this->_value === self::CodeType_PaymentPendingWithPaisaPay;
    }

    /**
     * @return bool
     */
    public function isPaidWithPaisaPay()
    {
        return $this->_value === self::CodeType_PaidWithPaisaPay;
    }

    /**
     * @return bool
     */
    public function isPaymentPending()
    {
        return $this->_value === self::CodeType_PaymentPending;
    }

    /**
     * @return bool
     */
    public function isPaymentPendingWithPaisaPayEscrow()
    {
        return $this->_value === self::CodeType_PaymentPendingWithPaisaPayEscrow;
    }

    /**
     * @return bool
     */
    public function isPaidWithPaisaPayEscrow()
    {
        return $this->_value === self::CodeType_PaidWithPaisaPayEscrow;
    }

    /**
     * @return bool
     */
    public function isPaisaPayNotPaid()
    {
        return $this->_value === self::CodeType_PaisaPayNotPaid;
    }

    /**
     * @return bool
     */
    public function isRefunded()
    {
        return $this->_value === self::CodeType_Refunded;
    }

    /**
     * @return bool
     */
    public function isWaitingForCODPayment()
    {
        return $this->_value === self::CodeType_WaitingForCODPayment;
    }

    /**
     * @return bool
     */
    public function isPaidCOD()
    {
        return $this->_value === self::CodeType_PaidCOD;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }

    /**
     * @return bool
     */
    public function isPaid()
    {
        return $this->_value === self::CodeType_Paid;
    }

    /**
     * @return bool
     */
    public function isPayUponInvoice()
    {
        return $this->_value === self::CodeType_PayUponInvoice;
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

PaidStatusCodeType::_register();
