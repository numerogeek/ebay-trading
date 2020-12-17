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
 * Indicates if shipping options are available for Classified Ad
 * format listings in the category.
 * Added for Local Market users.
 **/
class LocalMarketShippingMethodEnabledDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'LocalMarketShippingMethodEnabledDefinitionType';
    const NAME = 'LocalMarketShippingMethodEnabledDefinitionType';
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

LocalMarketShippingMethodEnabledDefinitionType::_register();
