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
 * The response of a
 * SetStore
 * call only includes the standard response fields for Trading API calls, such as the
 * Ack
 * field (to indicate the success or failure of the call), the timestamp, and an
 * Errors
 * container (if there were any errors and/or warnings).
 **/
class SetStoreResponseType extends EbatNs_Response
{
    const TAG = 'SetStoreResponseType';
    const NAME = 'SetStoreResponseType';
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

SetStoreResponseType::_register();
