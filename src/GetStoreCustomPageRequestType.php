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
 * This call is used to retrieve a specific custom page or all custom pages created for a seller's eBay Store. The
 * eBay seller must have an eBay Store subscription to use this call.
 **/
class GetStoreCustomPageRequestType extends AbstractRequestType
{
    const TAG = 'GetStoreCustomPageRequest';
    const NAME = 'GetStoreCustomPageRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetStoreCustomPage';

    /**
     * @var int|null
     */
    protected $PageID = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPageID()
    {
        return $this->_dc($this->PageID, 'PageID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPageID($value)
    {
        $this->PageID = self::_int($value);
    }

    /**
     * @return GetStoreCustomPageResponseType|EbatNs_ResponseError
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
        self::assignElements(['PageID' => ['type' => 'int']], parent::NAME);
        self::assignAttributes([]);
    }

}

GetStoreCustomPageRequestType::_register();
