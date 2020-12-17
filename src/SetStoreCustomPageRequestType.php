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
 * Creates or updates a custom page on a user's eBay Store. Sellers must have an eBay Store subscription in order to
 * use this call.
 **/
class SetStoreCustomPageRequestType extends AbstractRequestType
{
    const TAG = 'SetStoreCustomPageRequest';
    const NAME = 'SetStoreCustomPageRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'SetStoreCustomPage';

    /**
     * @var StoreCustomPageType|null
     */
    protected $CustomPage = null;


    /**
     * @return StoreCustomPageType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCustomPage()
    {
        return $this->_dc($this->CustomPage, 'CustomPage');
    }

    /**
     * @param StoreCustomPageType|null $value
     * @return void
     */
    public function setCustomPage($value)
    {
        $this->CustomPage = $value;
    }

    /**
     * @return SetStoreCustomPageResponseType|EbatNs_ResponseError
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
        self::assignElements(['CustomPage' => ['type' => 'StoreCustomPageType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

SetStoreCustomPageRequestType::_register();
