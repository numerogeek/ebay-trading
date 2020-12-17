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
 * ISBNEnabled
 * field that is returned under the
 * FeatureDefinitions
 * container of the
 * GetCategoryFeatures
 * response (as long as 'ISBNEnabled' is included as a
 * FeatureID
 * value in the call request or no
 * FeatureID
 * values are passed into the call request). This field is returned as an empty element (a boolean value is not
 * returned) if one or more eBay API-enabled sites support the ISBN product identifying feature.
 * 
 * To verify if a specific eBay site supports the ISBN product identifying feature (for most categories), look
 * for a 'true' value in the
 * SiteDefaults.ISBNEnabled
 * field.
 * 
 * To verify if a specific category on a specific eBay site supports the ISBN product identifying feature, pass
 * in a
 * CategoryID
 * value in the request, and then look for a <code>true</code> value in the
 * ISBNEnabled
 * field of the corresponding
 * Category
 * node (match up the
 * CategoryID
 * values if more than one Category IDs were passed in the request).
 **/
class ISBNEnabledDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'ISBNEnabledDefinitionType';
    const NAME = 'ISBNEnabledDefinitionType';
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

ISBNEnabledDefinitionType::_register();
