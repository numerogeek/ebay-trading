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
 * Contains information about a sale record.
 **/
class SellingManagerSoldOrderType extends EbatNs_ComplexType
{
    const TAG = 'SellingManagerSoldOrderType';
    const NAME = 'SellingManagerSoldOrderType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SellingManagerSoldTransactionType[]|null
     */
    protected $SellingManagerSoldTransaction = [];

    /**
     * @var AddressType|null
     */
    protected $ShippingAddress = null;

    /**
     * @var ShippingDetailsType|null
     */
    protected $ShippingDetails = null;

    /**
     * @var AmountType|null
     */
    protected $CashOnDeliveryCost = null;

    /**
     * @var AmountType|null
     */
    protected $TotalAmount = null;

    /**
     * @var int|null
     */
    protected $TotalQuantity = null;

    /**
     * @var AmountType|null
     */
    protected $ItemCost = null;

    /**
     * @var VATRateType[]|null
     */
    protected $VATRate = [];

    /**
     * @var AmountType|null
     */
    protected $NetInsuranceFee = null;

    /**
     * @var AmountType|null
     */
    protected $VATInsuranceFee = null;

    /**
     * @var AmountType|null
     */
    protected $VATShippingFee = null;

    /**
     * @var AmountType|null
     */
    protected $NetShippingFee = null;

    /**
     * @var AmountType|null
     */
    protected $NetTotalAmount = null;

    /**
     * @var AmountType|null
     */
    protected $VATTotalAmount = null;

    /**
     * @var AmountType|null
     */
    protected $ActualShippingCost = null;

    /**
     * @var AmountType|null
     */
    protected $AdjustmentAmount = null;

    /**
     * @var string|null
     */
    protected $NotesToBuyer = null;

    /**
     * @var string|null
     */
    protected $NotesFromBuyer = null;

    /**
     * @var string|null
     */
    protected $NotesToSeller = null;

    /**
     * @var SellingManagerOrderStatusType|null
     */
    protected $OrderStatus = null;

    /**
     * @var UnpaidItemStatusTypeCodeType|null
     */
    protected $UnpaidItemStatus = null;

    /**
     * @var AmountType|null
     */
    protected $SalePrice = null;

    /**
     * @var int|null
     */
    protected $EmailsSent = null;

    /**
     * @var int|null
     */
    protected $DaysSinceSale = null;

    /**
     * @var string|null
     */
    protected $BuyerID = null;

    /**
     * @var string|null
     */
    protected $BuyerEmail = null;

    /**
     * @var int|null
     */
    protected $SaleRecordID = null;

    /**
     * @var string|null
     */
    protected $CreationTime = null;

    /**
     * @var AmountType|null
     */
    protected $RefundAmount = null;

    /**
     * @var string|null
     */
    protected $RefundStatus = null;


    /**
     * @return SellingManagerSoldTransactionType[]|SellingManagerSoldTransactionType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getSellingManagerSoldTransaction($index = null)
    {
        return $this->_dc($index === null
            ? $this->SellingManagerSoldTransaction
            : (count($this->SellingManagerSoldTransaction) > $index
                ? $this->SellingManagerSoldTransaction[$index]
                : null), 'SellingManagerSoldTransaction');
    }

    /**
     * @param SellingManagerSoldTransactionType|null|SellingManagerSoldTransactionType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setSellingManagerSoldTransaction($value, $index = null)
    {
        if ($index === null) {
            $this->SellingManagerSoldTransaction = $value;
        } else {
            $this->SellingManagerSoldTransaction[$index] = [];
            
            foreach ($value as $item) {
                $this->addSellingManagerSoldTransaction($item);
            }
        }
    }

    /**
     * @param SellingManagerSoldTransactionType|null $value
     * @return void
     */
    public function addSellingManagerSoldTransaction($value)
    {
        $this->SellingManagerSoldTransaction[] = $value;
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
     * @return ShippingDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingDetails()
    {
        return $this->_dc($this->ShippingDetails, 'ShippingDetails');
    }

    /**
     * @param ShippingDetailsType|null $value
     * @return void
     */
    public function setShippingDetails($value)
    {
        $this->ShippingDetails = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCashOnDeliveryCost()
    {
        return $this->_dc($this->CashOnDeliveryCost, 'CashOnDeliveryCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setCashOnDeliveryCost($value)
    {
        $this->CashOnDeliveryCost = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalAmount()
    {
        return $this->_dc($this->TotalAmount, 'TotalAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setTotalAmount($value)
    {
        $this->TotalAmount = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalQuantity()
    {
        return $this->_dc($this->TotalQuantity, 'TotalQuantity');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setTotalQuantity($value)
    {
        $this->TotalQuantity = self::_int($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemCost()
    {
        return $this->_dc($this->ItemCost, 'ItemCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setItemCost($value)
    {
        $this->ItemCost = $value;
    }

    /**
     * @return VATRateType[]|VATRateType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getVATRate($index = null)
    {
        return $this->_dc($index === null
            ? $this->VATRate
            : (count($this->VATRate) > $index
                ? $this->VATRate[$index]
                : null), 'VATRate');
    }

    /**
     * @param VATRateType|null|VATRateType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setVATRate($value, $index = null)
    {
        if ($index === null) {
            $this->VATRate = $value;
        } else {
            $this->VATRate[$index] = [];
            
            foreach ($value as $item) {
                $this->addVATRate($item);
            }
        }
    }

    /**
     * @param VATRateType|null $value
     * @return void
     */
    public function addVATRate($value)
    {
        $this->VATRate[] = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNetInsuranceFee()
    {
        return $this->_dc($this->NetInsuranceFee, 'NetInsuranceFee');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setNetInsuranceFee($value)
    {
        $this->NetInsuranceFee = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVATInsuranceFee()
    {
        return $this->_dc($this->VATInsuranceFee, 'VATInsuranceFee');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setVATInsuranceFee($value)
    {
        $this->VATInsuranceFee = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVATShippingFee()
    {
        return $this->_dc($this->VATShippingFee, 'VATShippingFee');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setVATShippingFee($value)
    {
        $this->VATShippingFee = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNetShippingFee()
    {
        return $this->_dc($this->NetShippingFee, 'NetShippingFee');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setNetShippingFee($value)
    {
        $this->NetShippingFee = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNetTotalAmount()
    {
        return $this->_dc($this->NetTotalAmount, 'NetTotalAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setNetTotalAmount($value)
    {
        $this->NetTotalAmount = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVATTotalAmount()
    {
        return $this->_dc($this->VATTotalAmount, 'VATTotalAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setVATTotalAmount($value)
    {
        $this->VATTotalAmount = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getActualShippingCost()
    {
        return $this->_dc($this->ActualShippingCost, 'ActualShippingCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setActualShippingCost($value)
    {
        $this->ActualShippingCost = $value;
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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNotesToBuyer()
    {
        return $this->_dc($this->NotesToBuyer, 'NotesToBuyer');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setNotesToBuyer($value)
    {
        $this->NotesToBuyer = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNotesFromBuyer()
    {
        return $this->_dc($this->NotesFromBuyer, 'NotesFromBuyer');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setNotesFromBuyer($value)
    {
        $this->NotesFromBuyer = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNotesToSeller()
    {
        return $this->_dc($this->NotesToSeller, 'NotesToSeller');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setNotesToSeller($value)
    {
        $this->NotesToSeller = self::_string($value);
    }

    /**
     * @return SellingManagerOrderStatusType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderStatus()
    {
        return $this->_dc($this->OrderStatus, 'OrderStatus');
    }

    /**
     * @param SellingManagerOrderStatusType|null $value
     * @return void
     */
    public function setOrderStatus($value)
    {
        $this->OrderStatus = $value;
    }

    /**
     * @return UnpaidItemStatusTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUnpaidItemStatus()
    {
        return $this->_dc($this->UnpaidItemStatus);
    }

    /**
     * @param UnpaidItemStatusTypeCodeType|null $value
     * @return void
     */
    public function setUnpaidItemStatus($value)
    {
        $this->UnpaidItemStatus = $this->_enum($value, UnpaidItemStatusTypeCodeType::class);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSalePrice()
    {
        return $this->_dc($this->SalePrice, 'SalePrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setSalePrice($value)
    {
        $this->SalePrice = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEmailsSent()
    {
        return $this->_dc($this->EmailsSent, 'EmailsSent');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setEmailsSent($value)
    {
        $this->EmailsSent = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDaysSinceSale()
    {
        return $this->_dc($this->DaysSinceSale, 'DaysSinceSale');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setDaysSinceSale($value)
    {
        $this->DaysSinceSale = self::_int($value);
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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyerEmail()
    {
        return $this->_dc($this->BuyerEmail, 'BuyerEmail');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setBuyerEmail($value)
    {
        $this->BuyerEmail = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSaleRecordID()
    {
        return $this->_dc($this->SaleRecordID, 'SaleRecordID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setSaleRecordID($value)
    {
        $this->SaleRecordID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCreationTime()
    {
        return $this->_dc($this->CreationTime, 'CreationTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCreationTime($value)
    {
        $this->CreationTime = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundAmount()
    {
        return $this->_dc($this->RefundAmount, 'RefundAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setRefundAmount($value)
    {
        $this->RefundAmount = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundStatus()
    {
        return $this->_dc($this->RefundStatus, 'RefundStatus');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRefundStatus($value)
    {
        $this->RefundStatus = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'SellingManagerSoldTransaction' => ['type' => 'SellingManagerSoldTransactionType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ShippingAddress' => ['type' => 'AddressType', 'xmlns' => self::XMLNS],
            'ShippingDetails' => ['type' => 'ShippingDetailsType', 'xmlns' => self::XMLNS],
            'CashOnDeliveryCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'TotalAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'TotalQuantity' => ['type' => 'int'],
            'ItemCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'VATRate' => ['type' => 'VATRateType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'NetInsuranceFee' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'VATInsuranceFee' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'VATShippingFee' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'NetShippingFee' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'NetTotalAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'VATTotalAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ActualShippingCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'AdjustmentAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'NotesToBuyer' => [],
            'NotesFromBuyer' => [],
            'NotesToSeller' => [],
            'OrderStatus' => ['type' => 'SellingManagerOrderStatusType', 'xmlns' => self::XMLNS],
            'UnpaidItemStatus' => ['type' => 'UnpaidItemStatusTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'SalePrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'EmailsSent' => ['type' => 'int'],
            'DaysSinceSale' => ['type' => 'int'],
            'BuyerID' => [],
            'BuyerEmail' => [],
            'SaleRecordID' => ['type' => 'int'],
            'CreationTime' => [],
            'RefundAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'RefundStatus' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellingManagerSoldOrderType::_register();
