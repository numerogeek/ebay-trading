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
 * This type is the base response of the
 * AddDisputeResponse
 * call. This type has no call-specific fields, but the applicable fields of the
 * AbstractResponseType
 * will be returned in the
 * AddDisputeResponse
 * response.
 **/
class AddDisputeResponseResponseType extends EbatNs_Response
{
    const TAG = 'AddDisputeResponseResponseType';
    const NAME = 'AddDisputeResponseResponseType';
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

AddDisputeResponseResponseType::_register();
