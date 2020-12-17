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
 * For the US, Canada and Australia sites, users are
 * required to offer at least one safe payment method (i.e. PayPal/PaisaPay, or one
 * of the credit cards specified in Item.PaymentMethods).
 * 
 * If a seller has a 'SafePaymentExempt' status, they are exempt from the category
 * requirement to offer at least one safe payment method when listing an item on a
 * site that has the safe payment requirement.
 * 
 * The safe payment requirement also applies to two-category listings that have one
 * ship-to or available-to location in the US, Canada, or Australia. The French
 * Canadian (CAFR) site is a special case, because listings on the CAFR site with
 * ship-to or available-to locations in Canada do not require a Safe Payment method,
 * yet listings on the CAFR site with ship-to or available-to locations in the US or
 * Australia do require a safe payment method.
 * 
 * The Business and Industrial, Motors, Real Estate, and Mature Audiences categories,
 * and all listings that don't support Item.PaymentMethods are exempt from this
 * requirement. Therefore, listings in those categories do not require a safe payment
 * method.
 * 
 * Currently, this field contains no other special meta-data.(An empty element is
 * returned.)
 * 
 * 
 * Use SiteDefaults.SafePaymentRequired and Category.SafePaymentRequired to determine
 * which categories require a safe payment method.
 **/
class SafePaymentRequiredDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'SafePaymentRequiredDefinitionType';
    const NAME = 'SafePaymentRequiredDefinitionType';
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

SafePaymentRequiredDefinitionType::_register();
