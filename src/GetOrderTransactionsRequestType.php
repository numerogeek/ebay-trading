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
 * The base request type for the
 * GetOrderTransactions
 * call. This call retrieves detailed information about one or more orders or order line items created (or
 * modified) in the last 90 days.
 * 
 * Unlike
 * GetOrders
 * , which can be used to retrieve specific orders, or orders created (or modified) within a specific time period,
 * the
 * GetOrderTransactions
 * call only supports the retrieval of specific orders and/or order line items.
 **/
class GetOrderTransactionsRequestType extends AbstractRequestType
{
    const TAG = 'GetOrderTransactionsRequest';
    const NAME = 'GetOrderTransactionsRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetOrderTransactions';

    /**
     * @var ItemTransactionIDArrayType|null
     */
    protected $ItemTransactionIDArray = null;

    /**
     * @var OrderIDArrayType|null
     */
    protected $OrderIDArray = null;

    /**
     * @var TransactionPlatformCodeType|null
     */
    protected $Platform = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeFinalValueFees = null;


    /**
     * @return ItemTransactionIDArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemTransactionIDArray()
    {
        return $this->_dc($this->ItemTransactionIDArray, 'ItemTransactionIDArray');
    }

    /**
     * @param ItemTransactionIDArrayType|null $value
     * @return void
     */
    public function setItemTransactionIDArray($value)
    {
        $this->ItemTransactionIDArray = $value;
    }

    /**
     * @return OrderIDArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderIDArray()
    {
        return $this->_dc($this->OrderIDArray, 'OrderIDArray');
    }

    /**
     * @param OrderIDArrayType|null $value
     * @return void
     */
    public function setOrderIDArray($value)
    {
        $this->OrderIDArray = $value;
    }

    /**
     * @return TransactionPlatformCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPlatform()
    {
        return $this->_dc($this->Platform);
    }

    /**
     * @param TransactionPlatformCodeType|null $value
     * @return void
     */
    public function setPlatform($value)
    {
        $this->Platform = $this->_enum($value, TransactionPlatformCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeFinalValueFees()
    {
        return $this->_dc($this->IncludeFinalValueFees === 'true', 'IncludeFinalValueFees');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeFinalValueFees($value)
    {
        $this->IncludeFinalValueFees = self::_bool($value);
    }

    /**
     * @return GetOrderTransactionsResponseType|EbatNs_ResponseError
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
            'ItemTransactionIDArray' => ['type' => 'ItemTransactionIDArrayType', 'xmlns' => self::XMLNS],
            'OrderIDArray' => ['type' => 'OrderIDArrayType', 'xmlns' => self::XMLNS],
            'Platform' => ['type' => 'TransactionPlatformCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'IncludeFinalValueFees' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetOrderTransactionsRequestType::_register();
