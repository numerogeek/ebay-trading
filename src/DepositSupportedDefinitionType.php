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
 * If present, the site defines category settings for whether the seller can specify a vehicle deposit for US eBay
 * Motors listings.
 **/
class DepositSupportedDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'DepositSupportedDefinitionType';
    const NAME = 'DepositSupportedDefinitionType';
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

DepositSupportedDefinitionType::_register();
