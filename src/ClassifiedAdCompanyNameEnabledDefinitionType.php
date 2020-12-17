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
 * Indicates whether the category supports the use of a company name
 * when contacting the seller for Classified Ad format listings.
 * Added for the For Sale By Owner format.
 **/
class ClassifiedAdCompanyNameEnabledDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'ClassifiedAdCompanyNameEnabledDefinitionType';
    const NAME = 'ClassifiedAdCompanyNameEnabledDefinitionType';
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

ClassifiedAdCompanyNameEnabledDefinitionType::_register();
