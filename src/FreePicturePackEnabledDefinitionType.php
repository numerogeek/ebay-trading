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
 * FreePicturePackEnabled
 * field that is returned under the
 * FeatureDefinitions
 * container of the
 * GetCategoryFeatures
 * response (as long as <code>FreePicturePackEnabled</code> is included as a
 * FeatureID
 * value in the call request, or no
 * FeatureID
 * values are passed into the call request). This field is returned as an empty element (a boolean value is not
 * returned) if one or more eBay API-enabled sites support the Free Picture Pack feature for one or multiple
 * categories.
 **/
class FreePicturePackEnabledDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'FreePicturePackEnabledDefinitionType';
    const NAME = 'FreePicturePackEnabledDefinitionType';
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

FreePicturePackEnabledDefinitionType::_register();
