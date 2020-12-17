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
 * GetChallengeToken
 * call. This call retrieves a botblock token and URLs for an image or audio clip that the user is to match.
 * 
 * This call does not have any call-specific input parameters.
 **/
class GetChallengeTokenRequestType extends AbstractRequestType
{
    const TAG = 'GetChallengeTokenRequest';
    const NAME = 'GetChallengeTokenRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetChallengeToken';


    /**
     * @return GetChallengeTokenResponseType|EbatNs_ResponseError
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

GetChallengeTokenRequestType::_register();
