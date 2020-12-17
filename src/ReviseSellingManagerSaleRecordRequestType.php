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
 * Request type containing the input fields for the
 * ReviseSellingManagerSaleRecord
 * call. The standard Trading API deprecation process is not applicable to this
 * call. The user must have a Selling Manager Pro subscription to use this call.
 **/
class ReviseSellingManagerSaleRecordRequestType extends AbstractRequestType
{
    const TAG = 'ReviseSellingManagerSaleRecordRequest';
    const NAME = 'ReviseSellingManagerSaleRecordRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'ReviseSellingManagerSaleRecord';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var string|null
     */
    protected $TransactionID = null;

    /**
     * @var OrderIDType|null
     */
    protected $OrderID = null;

    /**
     * @var SellingManagerSoldOrderType|null
     */
    protected $SellingManagerSoldOrder = null;

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
     * @return SellingManagerSoldOrderType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellingManagerSoldOrder()
    {
        return $this->_dc($this->SellingManagerSoldOrder, 'SellingManagerSoldOrder');
    }

    /**
     * @param SellingManagerSoldOrderType|null $value
     * @return void
     */
    public function setSellingManagerSoldOrder($value)
    {
        $this->SellingManagerSoldOrder = $value;
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
     * @return ReviseSellingManagerSaleRecordResponseType|EbatNs_ResponseError
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
            'OrderID' => ['type' => 'OrderIDType', 'xmlns' => self::XMLNS],
            'SellingManagerSoldOrder' => ['type' => 'SellingManagerSoldOrderType', 'xmlns' => self::XMLNS],
            'OrderLineItemID' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ReviseSellingManagerSaleRecordRequestType::_register();
