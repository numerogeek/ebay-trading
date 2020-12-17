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
 * Type defining the values that can be returned in the
 * eBayPaymentStatus
 * 
 * field of order management calls. These values indicate the current status of the buyer's
 * payment for an order.
 **/
class PaymentStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'PaymentStatusCodeType';
    const NAME = 'PaymentStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the buyer's payment for the order has cleared. A
     * 
     * CheckoutStatus.eBayPaymentStatus
     * value of 'NoPaymentFailure'
     * and a
     * CheckoutStatus.Status
     * value of 'Complete' indicates that
     * checkout is complete.
     **/
    const CodeType_NoPaymentFailure = 'NoPaymentFailure';

    /**
     * This value indicates that the buyer's eCheck bounced. This value is only applicable
     * if the seller accepts eChecks as a form of payment.
     **/
    const CodeType_BuyerECheckBounced = 'BuyerECheckBounced';

    /**
     * This value indicates that the buyer's payment via a credit card failed. This value
     * is only applicable if the seller accepts credit cards as a form of payment.
     **/
    const CodeType_BuyerCreditCardFailed = 'BuyerCreditCardFailed';

    /**
     * This value indicates that the seller reported the buyer's payment as failed.
     **/
    const CodeType_BuyerFailedPaymentReportedBySeller = 'BuyerFailedPaymentReportedBySeller';

    /**
     * This value indicates that the buyer's PayPal payment is in process. This value
     * is only applicable if the buyer has selected PayPal as the payment method.
     **/
    const CodeType_PayPalPaymentInProcess = 'PayPalPaymentInProcess';

    /**
     * This value indicates that the buyer's non-PayPal payment is in process. This value
     * is only applicable if the buyer has selected a payment method other than PayPal.
     **/
    const CodeType_PaymentInProcess = 'PaymentInProcess';

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
     * @return PaymentStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PaymentStatusCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isNoPaymentFailure()
    {
        return $this->_value === self::CodeType_NoPaymentFailure;
    }

    /**
     * @return bool
     */
    public function isBuyerECheckBounced()
    {
        return $this->_value === self::CodeType_BuyerECheckBounced;
    }

    /**
     * @return bool
     */
    public function isBuyerCreditCardFailed()
    {
        return $this->_value === self::CodeType_BuyerCreditCardFailed;
    }

    /**
     * @return bool
     */
    public function isBuyerFailedPaymentReportedBySeller()
    {
        return $this->_value === self::CodeType_BuyerFailedPaymentReportedBySeller;
    }

    /**
     * @return bool
     */
    public function isPayPalPaymentInProcess()
    {
        return $this->_value === self::CodeType_PayPalPaymentInProcess;
    }

    /**
     * @return bool
     */
    public function isPaymentInProcess()
    {
        return $this->_value === self::CodeType_PaymentInProcess;
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

PaymentStatusCodeType::_register();
