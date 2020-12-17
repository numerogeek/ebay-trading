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
 * Contains information about a single line item (transaction) in an order created
 * through Selling Manager.
 **/
class SellingManagerSoldTransactionType extends EbatNs_ComplexType
{
    const TAG = 'SellingManagerSoldTransactionType';
    const NAME = 'SellingManagerSoldTransactionType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $InvoiceNumber = null;

    /**
     * @var int|null
     */
    protected $TransactionID = null;

    /**
     * @var int|null
     */
    protected $SaleRecordID = null;

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var int|null
     */
    protected $QuantitySold = null;

    /**
     * @var AmountType|null
     */
    protected $ItemPrice = null;

    /**
     * @var AmountType|null
     */
    protected $SubtotalAmount = null;

    /**
     * @var string|null
     */
    protected $ItemTitle = null;

    /**
     * @var ListingTypeCodeType|null
     */
    protected $ListingType = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $Relisted = null;

    /**
     * @var int|null
     */
    protected $WatchCount = null;

    /**
     * @var AmountType|null
     */
    protected $StartPrice = null;

    /**
     * @var AmountType|null
     */
    protected $ReservePrice = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $SecondChanceOfferSent = null;

    /**
     * @var string|null
     */
    protected $CustomLabel = null;

    /**
     * @var TransactionPlatformCodeType|null
     */
    protected $SoldOn = null;

    /**
     * @var TransactionPlatformCodeType[]|null
     */
    protected $ListedOn = [];

    /**
     * @var ShipmentType|null
     */
    protected $Shipment = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $CharityListing = null;

    /**
     * @var VariationType|null
     */
    protected $Variation = null;

    /**
     * @var string|null
     */
    protected $OrderLineItemID = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInvoiceNumber()
    {
        return $this->_dc($this->InvoiceNumber, 'InvoiceNumber');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setInvoiceNumber($value)
    {
        $this->InvoiceNumber = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTransactionID()
    {
        return $this->_dc($this->TransactionID, 'TransactionID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setTransactionID($value)
    {
        $this->TransactionID = self::_int($value);
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
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuantitySold()
    {
        return $this->_dc($this->QuantitySold, 'QuantitySold');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setQuantitySold($value)
    {
        $this->QuantitySold = self::_int($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemPrice()
    {
        return $this->_dc($this->ItemPrice, 'ItemPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setItemPrice($value)
    {
        $this->ItemPrice = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSubtotalAmount()
    {
        return $this->_dc($this->SubtotalAmount, 'SubtotalAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setSubtotalAmount($value)
    {
        $this->SubtotalAmount = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemTitle()
    {
        return $this->_dc($this->ItemTitle, 'ItemTitle');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setItemTitle($value)
    {
        $this->ItemTitle = self::_string($value);
    }

    /**
     * @return ListingTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingType()
    {
        return $this->_dc($this->ListingType);
    }

    /**
     * @param ListingTypeCodeType|null $value
     * @return void
     */
    public function setListingType($value)
    {
        $this->ListingType = $this->_enum($value, ListingTypeCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRelisted()
    {
        return $this->_dc($this->Relisted === 'true', 'Relisted');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setRelisted($value)
    {
        $this->Relisted = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWatchCount()
    {
        return $this->_dc($this->WatchCount, 'WatchCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setWatchCount($value)
    {
        $this->WatchCount = self::_int($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStartPrice()
    {
        return $this->_dc($this->StartPrice, 'StartPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setStartPrice($value)
    {
        $this->StartPrice = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReservePrice()
    {
        return $this->_dc($this->ReservePrice, 'ReservePrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setReservePrice($value)
    {
        $this->ReservePrice = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSecondChanceOfferSent()
    {
        return $this->_dc($this->SecondChanceOfferSent === 'true', 'SecondChanceOfferSent');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setSecondChanceOfferSent($value)
    {
        $this->SecondChanceOfferSent = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCustomLabel()
    {
        return $this->_dc($this->CustomLabel, 'CustomLabel');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCustomLabel($value)
    {
        $this->CustomLabel = self::_string($value);
    }

    /**
     * @return TransactionPlatformCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSoldOn()
    {
        return $this->_dc($this->SoldOn);
    }

    /**
     * @param TransactionPlatformCodeType|null $value
     * @return void
     */
    public function setSoldOn($value)
    {
        $this->SoldOn = $this->_enum($value, TransactionPlatformCodeType::class);
    }

    /**
     * @return string[]|TransactionPlatformCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getListedOn($index = null)
    {
        return $this->_dc($index === null
            ? $this->ListedOn
            : (count($this->ListedOn) > $index
                ? $this->ListedOn[$index]
                : null));
    }

    /**
     * @param TransactionPlatformCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setListedOn($value, $index = null)
    {
        if ($index === null) {
            $this->ListedOn = $value;
        } else {
            $this->ListedOn[$index] = [];
            
            foreach ($value as $item) {
                $this->addListedOn($item);
            }
        }
    }

    /**
     * @param TransactionPlatformCodeType|null $value
     * @return void
     */
    public function addListedOn($value)
    {
        $this->ListedOn[] = $this->_enum($value, TransactionPlatformCodeType::class);
    }

    /**
     * @return ShipmentType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShipment()
    {
        return $this->_dc($this->Shipment, 'Shipment');
    }

    /**
     * @param ShipmentType|null $value
     * @return void
     */
    public function setShipment($value)
    {
        $this->Shipment = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCharityListing()
    {
        return $this->_dc($this->CharityListing === 'true', 'CharityListing');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setCharityListing($value)
    {
        $this->CharityListing = self::_bool($value);
    }

    /**
     * @return VariationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVariation()
    {
        return $this->_dc($this->Variation, 'Variation');
    }

    /**
     * @param VariationType|null $value
     * @return void
     */
    public function setVariation($value)
    {
        $this->Variation = $value;
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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'InvoiceNumber' => [],
            'TransactionID' => ['type' => 'int'],
            'SaleRecordID' => ['type' => 'int'],
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'QuantitySold' => ['type' => 'int'],
            'ItemPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'SubtotalAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ItemTitle' => [],
            'ListingType' => ['type' => 'ListingTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Relisted' => ['type' => 'bool'],
            'WatchCount' => ['type' => 'int'],
            'StartPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ReservePrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'SecondChanceOfferSent' => ['type' => 'bool'],
            'CustomLabel' => [],
            'SoldOn' => ['type' => 'TransactionPlatformCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ListedOn' => ['type' => 'TransactionPlatformCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'Shipment' => ['type' => 'ShipmentType', 'xmlns' => self::XMLNS],
            'CharityListing' => ['type' => 'bool'],
            'Variation' => ['type' => 'VariationType', 'xmlns' => self::XMLNS],
            'OrderLineItemID' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellingManagerSoldTransactionType::_register();
