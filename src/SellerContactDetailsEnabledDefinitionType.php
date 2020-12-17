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
 * Defines the SellerContactDetailsEnabled feature. If the field is present, the
 * category allows retrieval of seller-level contact information. The field is
 * returned as an empty element (e.g., a boolean value is not returned).
 **/
class SellerContactDetailsEnabledDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'SellerContactDetailsEnabledDefinitionType';
    const NAME = 'SellerContactDetailsEnabledDefinitionType';
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

SellerContactDetailsEnabledDefinitionType::_register();
