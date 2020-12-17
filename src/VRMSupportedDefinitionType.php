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
 * If present, the site defines category settings for whether the seller
 * can provide a Vehicle Registration Mark (VRM) for a
 * UK eBay Motors vehicle listing.
 **/
class VRMSupportedDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'VRMSupportedDefinitionType';
    const NAME = 'VRMSupportedDefinitionType';
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

VRMSupportedDefinitionType::_register();
