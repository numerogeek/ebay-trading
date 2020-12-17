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
 * Defines the LocalListingDistancesNonSubscription feature. This feature displays all the supported local
 * listing distances for items listed by sellers who have not subscribed to either Local Market for Vehicles
 * or Local Market for Specialty Vehicles.
 **/
class LocalListingDistancesNonSubscriptionDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'LocalListingDistancesNonSubscriptionDefinitionType';
    const NAME = 'LocalListingDistancesNonSubscriptionDefinitionType';
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

LocalListingDistancesNonSubscriptionDefinitionType::_register();
