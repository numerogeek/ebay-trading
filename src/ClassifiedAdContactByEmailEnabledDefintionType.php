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
 * Indicates if Email can be a contact method for the category
 **/
class ClassifiedAdContactByEmailEnabledDefintionType extends EbatNs_ComplexType
{
    const TAG = 'ClassifiedAdContactByEmailEnabledDefintionType';
    const NAME = 'ClassifiedAdContactByEmailEnabledDefintionType';
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

ClassifiedAdContactByEmailEnabledDefintionType::_register();
