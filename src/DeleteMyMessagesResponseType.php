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
 * The response to
 * DeleteMyMessages
 * . If the request is successful,
 * 
 * DeleteMyMessages
 * has an empty payload.
 **/
class DeleteMyMessagesResponseType extends EbatNs_Response
{
    const TAG = 'DeleteMyMessagesResponseType';
    const NAME = 'DeleteMyMessagesResponseType';
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

DeleteMyMessagesResponseType::_register();
