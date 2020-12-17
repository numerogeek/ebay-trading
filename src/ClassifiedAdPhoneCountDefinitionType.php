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
 * Indicates which phone option the category supports for contacting
 * the seller for Classified Ad format listings.
 * Added for the For Sale By Owner format.
 **/
class ClassifiedAdPhoneCountDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'ClassifiedAdPhoneCountDefinitionType';
    const NAME = 'ClassifiedAdPhoneCountDefinitionType';
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

ClassifiedAdPhoneCountDefinitionType::_register();
