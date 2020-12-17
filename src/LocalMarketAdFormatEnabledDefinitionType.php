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
 * Defines the AdFormatEnabled feature. If the field is present, the corresponding feature applies to the category.
 * This field is returned as an empty element (e.g., a boolean value is not returned).
 * Added for Local Market users.
 **/
class LocalMarketAdFormatEnabledDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'LocalMarketAdFormatEnabledDefinitionType';
    const NAME = 'LocalMarketAdFormatEnabledDefinitionType';
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

LocalMarketAdFormatEnabledDefinitionType::_register();
