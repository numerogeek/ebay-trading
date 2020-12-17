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
 * GetSellerDashboard
 * call. This call retrieves seller performance data, including seller standards level, Power Seller status, Buyer
 * Satisfaction status, eBay Search standing, and any seller fee discounts.
 **/
class GetSellerDashboardRequestType extends AbstractRequestType
{
    const TAG = 'GetSellerDashboardRequest';
    const NAME = 'GetSellerDashboardRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetSellerDashboard';


    /**
     * @return GetSellerDashboardResponseType|EbatNs_ResponseError
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

GetSellerDashboardRequestType::_register();
