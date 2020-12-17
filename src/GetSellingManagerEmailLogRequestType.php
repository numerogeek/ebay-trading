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
 * Retrieves a log of emails sent, or scheduled to be sent, to buyers.
 * 
 * The standard Trading API
 * deprecation process is not applicable to this call.
 **/
class GetSellingManagerEmailLogRequestType extends AbstractRequestType
{
    const TAG = 'GetSellingManagerEmailLogRequest';
    const NAME = 'GetSellingManagerEmailLogRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetSellingManagerEmailLog';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var int|null
     */
    protected $TransactionID = null;

    /**
     * @var OrderIDType|null
     */
    protected $OrderID = null;

    /**
     * @var TimeRangeType|null
     */
    protected $EmailDateRange = null;

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
     * @return OrderIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderID()
    {
        return $this->_dc($this->OrderID, 'OrderID');
    }

    /**
     * @param OrderIDType|null $value
     * @return void
     */
    public function setOrderID($value)
    {
        $this->OrderID = $value;
    }

    /**
     * @return TimeRangeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEmailDateRange()
    {
        return $this->_dc($this->EmailDateRange, 'EmailDateRange');
    }

    /**
     * @param TimeRangeType|null $value
     * @return void
     */
    public function setEmailDateRange($value)
    {
        $this->EmailDateRange = $value;
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
     * @return GetSellingManagerEmailLogResponseType|EbatNs_ResponseError
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
            'TransactionID' => ['type' => 'int'],
            'OrderID' => ['type' => 'OrderIDType', 'xmlns' => self::XMLNS],
            'EmailDateRange' => ['type' => 'TimeRangeType', 'xmlns' => self::XMLNS],
            'OrderLineItemID' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetSellingManagerEmailLogRequestType::_register();
