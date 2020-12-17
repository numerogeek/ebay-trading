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
 * ConditionEnabled
 * field that is
 * returned under the
 * FeatureDefinitions
 * container of the
 * 
 * GetCategoryFeatures
 * response (as long as
 * 'ConditionEnabled' is included as a
 * FeatureID
 * value in
 * the call request or no
 * FeatureID
 * values are passed into the call
 * request). This field is returned as an
 * empty element (a boolean value is not returned) if one or more eBay API-enabled sites
 * support the use of Condition IDs to express the condition of an item.
 * 
 * To verify if a specific eBay site supports Condition IDs (for most
 * categories), look for a 'Enabled' value in the
 * 
 * SiteDefaults.ConditionEnabled
 * field.
 * 
 * To verify if a specific category on a specific eBay site supports Condition IDs, pass in a
 * CategoryID
 * value in the request, and then
 * look for an 'Enabled' or 'Required' value in the
 * ConditionEnabled
 * field
 * of the corresponding Category node (match up the
 * CategoryID
 * values
 * if more than one Category IDs were passed in the request).
 **/
class ConditionEnabledDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'ConditionEnabledDefinitionType';
    const NAME = 'ConditionEnabledDefinitionType';
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

ConditionEnabledDefinitionType::_register();
