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
 * The base response to a
 * GetSellingManagerSaleRecord
 * call.
 **/
class GetSellingManagerSaleRecordResponseType extends EbatNs_Response
{
    const TAG = 'GetSellingManagerSaleRecordResponseType';
    const NAME = 'GetSellingManagerSaleRecordResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SellingManagerSoldOrderType|null
     */
    protected $SellingManagerSoldOrder = null;


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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['SellingManagerSoldOrder' => ['type' => 'SellingManagerSoldOrderType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

GetSellingManagerSaleRecordResponseType::_register();
