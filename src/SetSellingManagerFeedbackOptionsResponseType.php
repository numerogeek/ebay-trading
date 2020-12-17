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
 * Base response of
 * SetSellingManagerFeedbackOptions
 * call. This response provides confirmation that feedback comments and (optionally) automated feedback preferences
 * were added successfully.
 **/
class SetSellingManagerFeedbackOptionsResponseType extends EbatNs_Response
{
    const TAG = 'SetSellingManagerFeedbackOptionsResponseType';
    const NAME = 'SetSellingManagerFeedbackOptionsResponseType';
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

SetSellingManagerFeedbackOptionsResponseType::_register();
