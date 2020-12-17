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
 * The base response type for the
 * GetOrderTransactions
 * call. This call retrieves detailed information about one or more eBay.com orders. An
 * OrderArray.Order
 * container is returned for each order that matches the input criteria in the call request.
 **/
class GetOrderTransactionsResponseType extends EbatNs_Response
{
    const TAG = 'GetOrderTransactionsResponseType';
    const NAME = 'GetOrderTransactionsResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var OrderArrayType|null
     */
    protected $OrderArray = null;


    /**
     * @return OrderArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderArray()
    {
        return $this->_dc($this->OrderArray, 'OrderArray');
    }

    /**
     * @param OrderArrayType|null $value
     * @return void
     */
    public function setOrderArray($value)
    {
        $this->OrderArray = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['OrderArray' => ['type' => 'OrderArrayType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

GetOrderTransactionsResponseType::_register();
