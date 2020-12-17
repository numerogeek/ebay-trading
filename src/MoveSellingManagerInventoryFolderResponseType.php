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
 * Base response of the
 * MoveSellingManagerInventoryFolder
 * call. This response does not have any call-specific output fields.
 **/
class MoveSellingManagerInventoryFolderResponseType extends EbatNs_Response
{
    const TAG = 'MoveSellingManagerInventoryFolderResponseType';
    const NAME = 'MoveSellingManagerInventoryFolderResponseType';
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

MoveSellingManagerInventoryFolderResponseType::_register();
