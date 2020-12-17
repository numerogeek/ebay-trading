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
 * The base response of the
 * GetStore
 * call. This response consists of the data describing a seller's eBay store, and includes the eBay Store name, the
 * description of the store, the URL to the eBay Store, the subscription level, store theme information, and eBay
 * Store Category hierarchy.
 **/
class GetStoreResponseType extends EbatNs_Response
{
    const TAG = 'GetStoreResponseType';
    const NAME = 'GetStoreResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var StoreType|null
     */
    protected $Store = null;


    /**
     * @return StoreType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStore()
    {
        return $this->_dc($this->Store, 'Store');
    }

    /**
     * @param StoreType|null $value
     * @return void
     */
    public function setStore($value)
    {
        $this->Store = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Store' => ['type' => 'StoreType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

GetStoreResponseType::_register();
