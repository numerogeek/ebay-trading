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
 * In US, sellers can offer an item replacement for returns, in addition to offering money back returns. The values
 * returned in this field indicate the availability of such options for the given marketplace and category.
 * The values returned in this field are pertinent only if
 * ReturnPolicyEnabled
 * in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items
 * listed in the category must include a return policy. The values returned in this field are valid in AddItem and
 * its related family of calls, and in the return policies you configure for use with the Account API.
 **/
class InternationalRefundMethodDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'InternationalRefundMethodDefinitionType';
    const NAME = 'InternationalRefundMethodDefinitionType';
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

InternationalRefundMethodDefinitionType::_register();
