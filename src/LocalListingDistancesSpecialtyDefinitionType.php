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
 * Defines the LocalListingDistancesSpecialty feature. This feature displays the supported local listing
 * distances for items listed by sellers subscribed to Local Market for Specialty Vehicles.
 **/
class LocalListingDistancesSpecialtyDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'LocalListingDistancesSpecialtyDefinitionType';
    const NAME = 'LocalListingDistancesSpecialtyDefinitionType';
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

LocalListingDistancesSpecialtyDefinitionType::_register();
