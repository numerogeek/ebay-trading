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
 * Returns a seller's Ask Seller a Question (ASQ) subjects, each in
 * its own
 * Subject
 * field.
 **/
class GetMessagePreferencesRequestType extends AbstractRequestType
{
    const TAG = 'GetMessagePreferencesRequest';
    const NAME = 'GetMessagePreferencesRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetMessagePreferences';

    /**
     * @var UserIDType|null
     */
    protected $SellerID = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeASQPreferences = null;


    /**
     * @return UserIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerID()
    {
        return $this->_dc($this->SellerID, 'SellerID');
    }

    /**
     * @param UserIDType|null $value
     * @return void
     */
    public function setSellerID($value)
    {
        $this->SellerID = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeASQPreferences()
    {
        return $this->_dc($this->IncludeASQPreferences === 'true', 'IncludeASQPreferences');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeASQPreferences($value)
    {
        $this->IncludeASQPreferences = self::_bool($value);
    }

    /**
     * @return GetMessagePreferencesResponseType|EbatNs_ResponseError
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
        self::assignElements([
            'SellerID' => ['type' => 'UserIDType', 'xmlns' => self::XMLNS],
            'IncludeASQPreferences' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetMessagePreferencesRequestType::_register();
