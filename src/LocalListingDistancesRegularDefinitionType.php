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
 * Defines the LocalListingDistancesRegular feature. This feature displays all the supported local listing
 * distances for items listed by sellers subscribed to Local Market for Vehicles.
 **/
class LocalListingDistancesRegularDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'LocalListingDistancesRegularDefinitionType';
    const NAME = 'LocalListingDistancesRegularDefinitionType';
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

LocalListingDistancesRegularDefinitionType::_register();
