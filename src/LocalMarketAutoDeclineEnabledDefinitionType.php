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
 * Indicates whether automatic declination of Best Offers is allowed for this category for Motors Local Market
 * listings. Returned only if this category overrides the site default.
 **/
class LocalMarketAutoDeclineEnabledDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'LocalMarketAutoDeclineEnabledDefinitionType';
    const NAME = 'LocalMarketAutoDeclineEnabledDefinitionType';
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

LocalMarketAutoDeclineEnabledDefinitionType::_register();
