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
 * Sets the preferences for a user's eBay Store. Sellers must have an eBay Store subscription in order to use this
 * call.
 **/
class SetStorePreferencesRequestType extends AbstractRequestType
{
    const TAG = 'SetStorePreferencesRequest';
    const NAME = 'SetStorePreferencesRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'SetStorePreferences';

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
     * @return SetStorePreferencesResponseType|EbatNs_ResponseError
     * @param EbatNs_Client
     **/
    function call($client)
    {
        return $client->call(self::REQUEST, $this);
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

SetStorePreferencesRequestType::_register();
