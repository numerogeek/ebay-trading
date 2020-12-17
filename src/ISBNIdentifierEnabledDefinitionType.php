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
 * This type is deprecated. It was replaced by
 * ISBNEnabledDefinitionType
 * .
 **/
class ISBNIdentifierEnabledDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'ISBNIdentifierEnabledDefinitionType';
    const NAME = 'ISBNIdentifierEnabledDefinitionType';
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

ISBNIdentifierEnabledDefinitionType::_register();
