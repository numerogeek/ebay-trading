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
 * Defines the ProPackPlus feature (a feature pack). If the field is present, the corresponding feature applies to
 * the category. The field is returned as an empty element (i.e., a boolean value is not returned).
 **/
class ProPackPlusEnabledDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'ProPackPlusEnabledDefinitionType';
    const NAME = 'ProPackPlusEnabledDefinitionType';
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

ProPackPlusEnabledDefinitionType::_register();
