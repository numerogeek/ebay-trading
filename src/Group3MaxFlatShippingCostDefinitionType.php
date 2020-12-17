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
 * About shipping service group 3.
 **/
class Group3MaxFlatShippingCostDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'Group3MaxFlatShippingCostDefinitionType';
    const NAME = 'Group3MaxFlatShippingCostDefinitionType';
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

Group3MaxFlatShippingCostDefinitionType::_register();
