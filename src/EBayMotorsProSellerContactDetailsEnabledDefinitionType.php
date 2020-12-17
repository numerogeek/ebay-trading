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
 * This field is returned (as an empty element) if the site supports contacting
 * the seller for a Classified Ad listings.
 * This is for EbayMotors Pro users only.
 **/
class EBayMotorsProSellerContactDetailsEnabledDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'eBayMotorsProSellerContactDetailsEnabledDefinitionType';
    const NAME = 'EBayMotorsProSellerContactDetailsEnabledDefinitionType';
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

EBayMotorsProSellerContactDetailsEnabledDefinitionType::_register();
