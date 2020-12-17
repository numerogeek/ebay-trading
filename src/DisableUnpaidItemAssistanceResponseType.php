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
 * Response of the
 * DisableUnpaidItemAssistance
 * call, which includes only the standard response fields like
 * Ack
 * ,
 * Timestamp
 * ,
 * Errors
 * , etc.
 **/
class DisableUnpaidItemAssistanceResponseType extends EbatNs_Response
{
    const TAG = 'DisableUnpaidItemAssistanceResponseType';
    const NAME = 'DisableUnpaidItemAssistanceResponseType';
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

DisableUnpaidItemAssistanceResponseType::_register();
