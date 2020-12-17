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
 * Enables a seller to update the payment details, the shipping details,
 * and the status of an order.
 **/
class ReviseCheckoutStatusRequestType extends AbstractRequestType
{
    const TAG = 'ReviseCheckoutStatusRequest';
    const NAME = 'ReviseCheckoutStatusRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'ReviseCheckoutStatus';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var string|null
     */
    protected $TransactionID = null;

    /**
     * @var string|null
     */
    protected $OrderID = null;

    /**
     * @var AmountType|null
     */
    protected $AmountPaid = null;

    /**
     * @var BuyerPaymentMethodCodeType|null
     */
    protected $PaymentMethodUsed = null;

    /**
     * @var CompleteStatusCodeType|null
     */
    protected $CheckoutStatus = null;

    /**
     * @var string|null
     */
    protected $ShippingService = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShippingIncludedInTax = null;

    /**
     * @var CheckoutMethodCodeType|null
     */
    protected $CheckoutMethod = null;

    /**
     * @var InsuranceSelectedCodeType|null
     */
    protected $InsuranceType = null;

    /**
     * @var RCSPaymentStatusCodeType|null
     */
    protected $PaymentStatus = null;

    /**
     * @var AmountType|null
     */
    protected $AdjustmentAmount = null;

    /**
     * @var AddressType|null
     */
    protected $ShippingAddress = null;

    /**
     * @var string|null
     */
    protected $BuyerID = null;

    /**
     * @var AmountType|null
     */
    protected $ShippingInsuranceCost = null;

    /**
     * @var AmountType|null
     */
    protected $SalesTax = null;

    /**
     * @var AmountType|null
     */
    protected $ShippingCost = null;

    /**
     * @var string|null
     */
    protected $EncryptedID = null;

    /**
     * @var ExternalTransactionType|null
     */
    protected $ExternalTransaction = null;

    /**
     * @var string|null
     */
    protected $MultipleSellerPaymentID = null;

    /**
     * @var AmountType|null
     */
    protected $CODCost = null;

    /**
     * @var string|null
     */
    protected $OrderLineItemID = null;


    /**
     * @return ItemIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemID()
    {
        return $this->_dc($this->ItemID, 'ItemID');
    }

    /**
     * @param ItemIDType|null $value
     * @return void
     */
    public function setItemID($value)
    {
        $this->ItemID = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTransactionID()
    {
        return $this->_dc($this->TransactionID, 'TransactionID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTransactionID($value)
    {
        $this->TransactionID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderID()
    {
        return $this->_dc($this->OrderID, 'OrderID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setOrderID($value)
    {
        $this->OrderID = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAmountPaid()
    {
        return $this->_dc($this->AmountPaid, 'AmountPaid');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setAmountPaid($value)
    {
        $this->AmountPaid = $value;
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
     * @return CompleteStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCheckoutStatus()
    {
        return $this->_dc($this->CheckoutStatus);
    }

    /**
     * @param CompleteStatusCodeType|null $value
     * @return void
     */
    public function setCheckoutStatus($value)
    {
        $this->CheckoutStatus = $this->_enum($value, CompleteStatusCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingService()
    {
        return $this->_dc($this->ShippingService, 'ShippingService');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShippingService($value)
    {
        $this->ShippingService = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingIncludedInTax()
    {
        return $this->_dc($this->ShippingIncludedInTax === 'true', 'ShippingIncludedInTax');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShippingIncludedInTax($value)
    {
        $this->ShippingIncludedInTax = self::_bool($value);
    }

    /**
     * @return CheckoutMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCheckoutMethod()
    {
        return $this->_dc($this->CheckoutMethod);
    }

    /**
     * @param CheckoutMethodCodeType|null $value
     * @return void
     */
    public function setCheckoutMethod($value)
    {
        $this->CheckoutMethod = $this->_enum($value, CheckoutMethodCodeType::class);
    }

    /**
     * @return InsuranceSelectedCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInsuranceType()
    {
        return $this->_dc($this->InsuranceType);
    }

    /**
     * @param InsuranceSelectedCodeType|null $value
     * @return void
     */
    public function setInsuranceType($value)
    {
        $this->InsuranceType = $this->_enum($value, InsuranceSelectedCodeType::class);
    }

    /**
     * @return RCSPaymentStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentStatus()
    {
        return $this->_dc($this->PaymentStatus);
    }

    /**
     * @param RCSPaymentStatusCodeType|null $value
     * @return void
     */
    public function setPaymentStatus($value)
    {
        $this->PaymentStatus = $this->_enum($value, RCSPaymentStatusCodeType::class);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAdjustmentAmount()
    {
        return $this->_dc($this->AdjustmentAmount, 'AdjustmentAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setAdjustmentAmount($value)
    {
        $this->AdjustmentAmount = $value;
    }

    /**
     * @return AddressType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingAddress()
    {
        return $this->_dc($this->ShippingAddress, 'ShippingAddress');
    }

    /**
     * @param AddressType|null $value
     * @return void
     */
    public function setShippingAddress($value)
    {
        $this->ShippingAddress = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyerID()
    {
        return $this->_dc($this->BuyerID, 'BuyerID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setBuyerID($value)
    {
        $this->BuyerID = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingInsuranceCost()
    {
        return $this->_dc($this->ShippingInsuranceCost, 'ShippingInsuranceCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setShippingInsuranceCost($value)
    {
        $this->ShippingInsuranceCost = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSalesTax()
    {
        return $this->_dc($this->SalesTax, 'SalesTax');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setSalesTax($value)
    {
        $this->SalesTax = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingCost()
    {
        return $this->_dc($this->ShippingCost, 'ShippingCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setShippingCost($value)
    {
        $this->ShippingCost = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEncryptedID()
    {
        return $this->_dc($this->EncryptedID, 'EncryptedID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEncryptedID($value)
    {
        $this->EncryptedID = self::_string($value);
    }

    /**
     * @return ExternalTransactionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExternalTransaction()
    {
        return $this->_dc($this->ExternalTransaction, 'ExternalTransaction');
    }

    /**
     * @param ExternalTransactionType|null $value
     * @return void
     */
    public function setExternalTransaction($value)
    {
        $this->ExternalTransaction = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMultipleSellerPaymentID()
    {
        return $this->_dc($this->MultipleSellerPaymentID, 'MultipleSellerPaymentID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMultipleSellerPaymentID($value)
    {
        $this->MultipleSellerPaymentID = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCODCost()
    {
        return $this->_dc($this->CODCost, 'CODCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setCODCost($value)
    {
        $this->CODCost = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderLineItemID()
    {
        return $this->_dc($this->OrderLineItemID, 'OrderLineItemID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setOrderLineItemID($value)
    {
        $this->OrderLineItemID = self::_string($value);
    }

    /**
     * @return ReviseCheckoutStatusResponseType|EbatNs_ResponseError
     * @param EbatNs_Client
     **/
    function call($client)
    {
        return $client->call(self::REQUEST, $this);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'TransactionID' => [],
            'OrderID' => [],
            'AmountPaid' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'PaymentMethodUsed' => ['type' => 'BuyerPaymentMethodCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'CheckoutStatus' => ['type' => 'CompleteStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ShippingService' => [],
            'ShippingIncludedInTax' => ['type' => 'bool'],
            'CheckoutMethod' => ['type' => 'CheckoutMethodCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'InsuranceType' => ['type' => 'InsuranceSelectedCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PaymentStatus' => ['type' => 'RCSPaymentStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'AdjustmentAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ShippingAddress' => ['type' => 'AddressType', 'xmlns' => self::XMLNS],
            'BuyerID' => [],
            'ShippingInsuranceCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'SalesTax' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ShippingCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'EncryptedID' => [],
            'ExternalTransaction' => ['type' => 'ExternalTransactionType', 'xmlns' => self::XMLNS],
            'MultipleSellerPaymentID' => [],
            'CODCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'OrderLineItemID' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ReviseCheckoutStatusRequestType::_register();
