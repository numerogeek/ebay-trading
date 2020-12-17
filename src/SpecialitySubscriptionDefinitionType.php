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
 * Indicates category support for listing of Local Market items by sellers
 * subscribed to Local Market for Specialty Vehicles.
 * Each of the subscriptions will have following options, which will define
 * "National" vs "Local" ad format listing.
 * "LocalOptional" : This will allow national and local listing.
 * "LocalOnly" : Seller can have Local listings only.
 * "NationalOnly" : Seller can not opt into local only exposure. It has to be
 * national listing.
 **/
class SpecialitySubscriptionDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'SpecialitySubscriptionDefinitionType';
    const NAME = 'SpecialitySubscriptionDefinitionType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

SpecialitySubscriptionDefinitionType::_register();
