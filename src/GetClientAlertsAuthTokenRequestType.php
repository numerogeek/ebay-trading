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
 * This is the base request type for the
 * GetClientAlertsAuthToken
 * call. This call retrieves a Client Alerts token for the user, which is required when the user makes a
 * GetUserAlerts
 * call (Client Alerts API).
 **/
class GetClientAlertsAuthTokenRequestType extends AbstractRequestType
{
    const TAG = 'GetClientAlertsAuthTokenRequest';
    const NAME = 'GetClientAlertsAuthTokenRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetClientAlertsAuthToken';


    /**
     * @return GetClientAlertsAuthTokenResponseType|EbatNs_ResponseError
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

GetClientAlertsAuthTokenRequestType::_register();
