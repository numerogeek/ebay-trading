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
 * Gets the official eBay system time in GMT.
 **/
class GeteBayOfficialTimeRequestType extends AbstractRequestType
{
    const TAG = 'GeteBayOfficialTimeRequest';
    const NAME = 'GeteBayOfficialTimeRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GeteBayOfficialTime';


    /**
     * @return GeteBayOfficialTimeResponseType|EbatNs_ResponseError
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
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

GeteBayOfficialTimeRequestType::_register();
