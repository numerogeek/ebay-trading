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
 * Type defining the
 * eBayMotorsProPaymentMethodCheckOutEnabled
 * field that is returned under the
 * FeatureDefinitions
 * container if <code>eBayMotorsProPaymentMethodCheckOutEnabled</code> is used as a
 * FeatureID
 * value in the request, or if no
 * FeatureID
 * values are used in the request. This field is returned as an empty element (a boolean value is not returned) if
 * one or more eBay API-enabled sites support the display of accepted payment methods for eBay Motors Classified Ad
 * listings. Only eBay Motors Pro users are eligible to use eBay Motors Classified Ad listings.
 **/
class EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'eBayMotorsProPaymentMethodCheckOutEnabledDefinitionType';
    const NAME = 'EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType';
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

EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType::_register();
