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
 * The base request type of the
 * GetTaxTable
 * call, which retrieves information on the seller's Sales Tax Table. This information includes all of the site's
 * tax jurisdictions, a boolean field to indicate if sales tax is applied to shipping and handling charges, and the
 * sales tax rate for each jurisdiction (if a sales tax rate is set for that jurisdiction).
 * 
 * Sales tax tables are only supported on the eBay US and Candada marketplaces.
 **/
class GetTaxTableRequestType extends AbstractRequestType
{
    const TAG = 'GetTaxTableRequest';
    const NAME = 'GetTaxTableRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetTaxTable';


    /**
     * @return GetTaxTableResponseType|EbatNs_ResponseError
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

GetTaxTableRequestType::_register();
