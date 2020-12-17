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
 * The Timestamp field indicates the official eBay system time in GMT.
 * For information about converting between GMT and other time zones,
 * see "Time Values" in the Data Types appendix in the eBay Features guide.
 **/
class GeteBayOfficialTimeResponseType extends EbatNs_Response
{
    const TAG = 'GeteBayOfficialTimeResponseType';
    const NAME = 'GeteBayOfficialTimeResponseType';
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

GeteBayOfficialTimeResponseType::_register();
