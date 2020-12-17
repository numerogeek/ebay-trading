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
 * Enables a seller to add custom Ask Seller a Question (ASQ) subjects to their
 * Ask a Question page, or to reset any custom subjects to their default values.
 **/
class SetMessagePreferencesRequestType extends AbstractRequestType
{
    const TAG = 'SetMessagePreferencesRequest';
    const NAME = 'SetMessagePreferencesRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'SetMessagePreferences';

    /**
     * @var ASQPreferencesType|null
     */
    protected $ASQPreferences = null;


    /**
     * @return ASQPreferencesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getASQPreferences()
    {
        return $this->_dc($this->ASQPreferences, 'ASQPreferences');
    }

    /**
     * @param ASQPreferencesType|null $value
     * @return void
     */
    public function setASQPreferences($value)
    {
        $this->ASQPreferences = $value;
    }

    /**
     * @return SetMessagePreferencesResponseType|EbatNs_ResponseError
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
        self::assignElements(['ASQPreferences' => ['type' => 'ASQPreferencesType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

SetMessagePreferencesRequestType::_register();
