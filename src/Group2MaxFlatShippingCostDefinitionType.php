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
 * About shipping service group 2.
 **/
class Group2MaxFlatShippingCostDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'Group2MaxFlatShippingCostDefinitionType';
    const NAME = 'Group2MaxFlatShippingCostDefinitionType';
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

Group2MaxFlatShippingCostDefinitionType::_register();
