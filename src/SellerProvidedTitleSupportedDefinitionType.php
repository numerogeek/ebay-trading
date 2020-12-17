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
 * If present, the site defines category settings for whether the seller can provide their own title for a US or CA
 * eBay Motors listing.
 **/
class SellerProvidedTitleSupportedDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'SellerProvidedTitleSupportedDefinitionType';
    const NAME = 'SellerProvidedTitleSupportedDefinitionType';
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

SellerProvidedTitleSupportedDefinitionType::_register();
