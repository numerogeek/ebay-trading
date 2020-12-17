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
 * This type is used by the
 * CategoryMapping
 * fields that are returned in the
 * GetCategoryMappings
 * response to indicate any eBay Category IDs that have changed recently.
 **/
class CategoryMappingType extends EbatNs_ComplexType
{
    const TAG = 'CategoryMappingType';
    const NAME = 'CategoryMappingType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([
            'oldID' => ['type' => 'string'],
            'id' => ['type' => 'string']]);
    }

}

CategoryMappingType::_register();
