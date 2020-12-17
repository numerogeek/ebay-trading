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
 * This type contains details on the status of an order.
 **/
class SellingManagerOrderStatusType extends EbatNs_ComplexType
{
    const TAG = 'SellingManagerOrderStatusType';
    const NAME = 'SellingManagerOrderStatusType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var CheckoutStatusCodeType|null
     */
    protected $CheckoutStatus = null;

    /**
     * @var SellingManagerPaidStatusCodeType|null
     */
    protected $PaidStatus = null;

    /**
     * @var SellingManagerShippedStatusCodeType|null
     */
    protected $ShippedStatus = null;

    /**
     * @var PaymentStatusCodeType|null
     */
    protected $eBayPaymentStatus = null;

    /**
     * @var string|null
     */
    protected $PayPalTransactionID = null;

    /**
     * @var BuyerPaymentMethodCodeType|null
     */
    protected $PaymentMethodUsed = null;

    /**
     * @var CommentTypeCodeType|null
     */
    protected $FeedbackReceived = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $FeedbackSent = null;

    /**
     * @var int|null
     */
    protected $TotalEmailsSent = null;

    /**
     * @var PaymentHoldStatusCodeType|null
     */
    protected $PaymentHoldStatus = null;

    /**
     * @var string|null
     */
    protected $SellerInvoiceNumber = null;

    /**
     * @var string|null
     */
    protected $ShippedTime = null;

    /**
     * @var string|null
     */
    protected $PaidTime = null;

    /**
     * @var string|null
     */
    protected $LastEmailSentTime = null;

    /**
     * @var string|null
     */
    protected $SellerInvoiceTime = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IntegratedMerchantCreditCardEnabled = null;


    /**
     * @return CheckoutStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCheckoutStatus()
    {
        return $this->_dc($this->CheckoutStatus);
    }

    /**
     * @param CheckoutStatusCodeType|null $value
     * @return void
     */
    public function setCheckoutStatus($value)
    {
        $this->CheckoutStatus = $this->_enum($value, CheckoutStatusCodeType::class);
    }

    /**
     * @return SellingManagerPaidStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaidStatus()
    {
        return $this->_dc($this->PaidStatus);
    }

    /**
     * @param SellingManagerPaidStatusCodeType|null $value
     * @return void
     */
    public function setPaidStatus($value)
    {
        $this->PaidStatus = $this->_enum($value, SellingManagerPaidStatusCodeType::class);
    }

    /**
     * @return SellingManagerShippedStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippedStatus()
    {
        return $this->_dc($this->ShippedStatus);
    }

    /**
     * @param SellingManagerShippedStatusCodeType|null $value
     * @return void
     */
    public function setShippedStatus($value)
    {
        $this->ShippedStatus = $this->_enum($value, SellingManagerShippedStatusCodeType::class);
    }

    /**
     * @return PaymentStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayPaymentStatus()
    {
        return $this->_dc($this->eBayPaymentStatus);
    }

    /**
     * @param PaymentStatusCodeType|null $value
     * @return void
     */
    public function setEBayPaymentStatus($value)
    {
        $this->eBayPaymentStatus = $this->_enum($value, PaymentStatusCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPayPalTransactionID()
    {
        return $this->_dc($this->PayPalTransactionID, 'PayPalTransactionID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPayPalTransactionID($value)
    {
        $this->PayPalTransactionID = self::_string($value);
    }

    /**
     * @return BuyerPaymentMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentMethodUsed()
    {
        return $this->_dc($this->PaymentMethodUsed);
    }

    /**
     * @param BuyerPaymentMethodCodeType|null $value
     * @return void
     */
    public function setPaymentMethodUsed($value)
    {
        $this->PaymentMethodUsed = $this->_enum($value, BuyerPaymentMethodCodeType::class);
    }

    /**
     * @return CommentTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeedbackReceived()
    {
        return $this->_dc($this->FeedbackReceived);
    }

    /**
     * @param CommentTypeCodeType|null $value
     * @return void
     */
    public function setFeedbackReceived($value)
    {
        $this->FeedbackReceived = $this->_enum($value, CommentTypeCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeedbackSent()
    {
        return $this->_dc($this->FeedbackSent === 'true', 'FeedbackSent');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setFeedbackSent($value)
    {
        $this->FeedbackSent = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalEmailsSent()
    {
        return $this->_dc($this->TotalEmailsSent, 'TotalEmailsSent');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setTotalEmailsSent($value)
    {
        $this->TotalEmailsSent = self::_int($value);
    }

    /**
     * @return PaymentHoldStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentHoldStatus()
    {
        return $this->_dc($this->PaymentHoldStatus);
    }

    /**
     * @param PaymentHoldStatusCodeType|null $value
     * @return void
     */
    public function setPaymentHoldStatus($value)
    {
        $this->PaymentHoldStatus = $this->_enum($value, PaymentHoldStatusCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerInvoiceNumber()
    {
        return $this->_dc($this->SellerInvoiceNumber, 'SellerInvoiceNumber');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSellerInvoiceNumber($value)
    {
        $this->SellerInvoiceNumber = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippedTime()
    {
        return $this->_dc($this->ShippedTime, 'ShippedTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShippedTime($value)
    {
        $this->ShippedTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaidTime()
    {
        return $this->_dc($this->PaidTime, 'PaidTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPaidTime($value)
    {
        $this->PaidTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLastEmailSentTime()
    {
        return $this->_dc($this->LastEmailSentTime, 'LastEmailSentTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setLastEmailSentTime($value)
    {
        $this->LastEmailSentTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerInvoiceTime()
    {
        return $this->_dc($this->SellerInvoiceTime, 'SellerInvoiceTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSellerInvoiceTime($value)
    {
        $this->SellerInvoiceTime = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIntegratedMerchantCreditCardEnabled()
    {
        return $this->_dc($this->IntegratedMerchantCreditCardEnabled === 'true', 'IntegratedMerchantCreditCardEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIntegratedMerchantCreditCardEnabled($value)
    {
        $this->IntegratedMerchantCreditCardEnabled = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CheckoutStatus' => ['type' => 'CheckoutStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PaidStatus' => ['type' => 'SellingManagerPaidStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ShippedStatus' => ['type' => 'SellingManagerShippedStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'eBayPaymentStatus' => ['type' => 'PaymentStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PayPalTransactionID' => [],
            'PaymentMethodUsed' => ['type' => 'BuyerPaymentMethodCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'FeedbackReceived' => ['type' => 'CommentTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'FeedbackSent' => ['type' => 'bool'],
            'TotalEmailsSent' => ['type' => 'int'],
            'PaymentHoldStatus' => ['type' => 'PaymentHoldStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'SellerInvoiceNumber' => [],
            'ShippedTime' => [],
            'PaidTime' => [],
            'LastEmailSentTime' => [],
            'SellerInvoiceTime' => [],
            'IntegratedMerchantCreditCardEnabled' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellingManagerOrderStatusType::_register();
