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
 * Indicates which phone option the category supports when contacting
 * the seller about listings in Classified Ad format.
 * Added for Local Market users.
 **/
class LocalMarketPhoneCountDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'LocalMarketPhoneCountDefinitionType';
    const NAME = 'LocalMarketPhoneCountDefinitionType';
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

LocalMarketPhoneCountDefinitionType::_register();
