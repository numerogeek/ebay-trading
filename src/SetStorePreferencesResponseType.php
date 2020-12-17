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
 * The base response for the
 * SetStorePreferences
 * call. There are no call-specific fields in this response, but the seller should look for an
 * Ack
 * value of <code>Success</code> to know that the preferences were successfully updated.
 **/
class SetStorePreferencesResponseType extends EbatNs_Response
{
    const TAG = 'SetStorePreferencesResponseType';
    const NAME = 'SetStorePreferencesResponseType';
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

SetStorePreferencesResponseType::_register();
