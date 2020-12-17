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
 * Type used by the
 * MaxFlatShippingCostCBTExempt
 * field that is returned under the
 * FeatureDefinitions
 * container. The
 * MaxFlatShippingCostCBTExempt
 * field is returned as empty  and indicates that a maximum flat-rate shipping cost is not imposed by the
 * corresponding eBay site if the item is being shipped internationally. This field will not be returned if one or
 * more
 * FeatureID
 * fields are included in the call request and
 * MaxFlatShippingCostCBTExempt
 * is not one of the values passed into those
 * FeatureID
 * fields.
 **/
class MaxFlatShippingCostCBTExemptDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'MaxFlatShippingCostCBTExemptDefinitionType';
    const NAME = 'MaxFlatShippingCostCBTExemptDefinitionType';
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

MaxFlatShippingCostCBTExemptDefinitionType::_register();
