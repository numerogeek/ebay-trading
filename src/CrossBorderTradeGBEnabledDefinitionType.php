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
 * CrossBorderTradeGBEnabled
 * field that is
 * returned under the
 * FeatureDefinitions
 * container of the
 * 
 * GetCategoryFeatures
 * response (as long as
 * 'CrossBorderTradeEnabled' is included as a
 * FeatureID
 * value in
 * the call request or no
 * FeatureID
 * values are passed into the call
 * request). This field is returned as an
 * empty element (a boolean value is not returned) if one or more eBay API-enabled sites
 * support Cross Border Trade listings on the eBay UK and eBay Ireland sites.
 * 
 * To verify if a specific eBay site supports Cross Border Trade listings on the eBay UK and eBay Ireland sites
 * (for most
 * categories), look for a 'true' value in the
 * 
 * SiteDefaults.CrossBorderTradeGBEnabled
 * field.
 * 
 * To verify if a specific category on a specific eBay site supports Cross Border Trade listings on the eBay UK
 * and eBay Ireland sites, pass in a
 * CategoryID
 * value in the request, and then
 * look for a 'true' value in the
 * CrossBorderTradeGBEnabled
 * field
 * of the corresponding Category node (match up the
 * CategoryID
 * values
 * if more than one Category IDs were passed in the request).
 **/
class CrossBorderTradeGBEnabledDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'CrossBorderTradeGBEnabledDefinitionType';
    const NAME = 'CrossBorderTradeGBEnabledDefinitionType';
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

CrossBorderTradeGBEnabledDefinitionType::_register();
