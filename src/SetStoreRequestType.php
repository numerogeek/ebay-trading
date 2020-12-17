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
 * This call is used to set/modify the configuration of a seller's eBay Store. Configuration information includes
 * store theme information and eBay Store category hierarchy.
 **/
class SetStoreRequestType extends AbstractRequestType
{
    const TAG = 'SetStoreRequest';
    const NAME = 'SetStoreRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'SetStore';

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
     * @return SetStoreResponseType|EbatNs_ResponseError
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
        self::assignElements(['Store' => ['type' => 'StoreType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

SetStoreRequestType::_register();
