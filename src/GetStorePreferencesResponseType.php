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
 * GetStorePreferences
 * call.
 **/
class GetStorePreferencesResponseType extends EbatNs_Response
{
    const TAG = 'GetStorePreferencesResponseType';
    const NAME = 'GetStorePreferencesResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var StorePreferencesType|null
     */
    protected $StorePreferences = null;


    /**
     * @return StorePreferencesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStorePreferences()
    {
        return $this->_dc($this->StorePreferences, 'StorePreferences');
    }

    /**
     * @param StorePreferencesType|null $value
     * @return void
     */
    public function setStorePreferences($value)
    {
        $this->StorePreferences = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['StorePreferences' => ['type' => 'StorePreferencesType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

GetStorePreferencesResponseType::_register();
