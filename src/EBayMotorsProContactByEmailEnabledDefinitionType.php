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
 * Indicates whether the site supports the use of an email address when contacting the
 * seller about eBay Motors Classified Ad listings. This feature is only
 * applicable for eBay Motors Pro users.
 **/
class EBayMotorsProContactByEmailEnabledDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'eBayMotorsProContactByEmailEnabledDefinitionType';
    const NAME = 'EBayMotorsProContactByEmailEnabledDefinitionType';
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

EBayMotorsProContactByEmailEnabledDefinitionType::_register();
