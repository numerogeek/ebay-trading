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
 * Defines the Minimum Reserve Price feature. If the field is present, the feature applies to the category. The
 * field is returned as an empty element (i.e., a boolean value is not returned).
 **/
class MinimumReservePriceDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'MinimumReservePriceDefinitionType';
    const NAME = 'MinimumReservePriceDefinitionType';
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

MinimumReservePriceDefinitionType::_register();
