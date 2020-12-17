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
 * Indicates whether the category supports the use of email to contact the
 * seller for Classified Ad format listings.Added for Local market users.
 **/
class LocalMarketContactByEmailEnabledDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'LocalMarketContactByEmailEnabledDefinitionType';
    const NAME = 'LocalMarketContactByEmailEnabledDefinitionType';
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

LocalMarketContactByEmailEnabledDefinitionType::_register();
