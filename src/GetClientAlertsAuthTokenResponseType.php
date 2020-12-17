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
 * Returns a Client Alerts token.
 **/
class GetClientAlertsAuthTokenResponseType extends EbatNs_Response
{
    const TAG = 'GetClientAlertsAuthTokenResponseType';
    const NAME = 'GetClientAlertsAuthTokenResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $ClientAlertsAuthToken = null;

    /**
     * @var string|null
     */
    protected $HardExpirationTime = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClientAlertsAuthToken()
    {
        return $this->_dc($this->ClientAlertsAuthToken, 'ClientAlertsAuthToken');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setClientAlertsAuthToken($value)
    {
        $this->ClientAlertsAuthToken = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHardExpirationTime()
    {
        return $this->_dc($this->HardExpirationTime, 'HardExpirationTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setHardExpirationTime($value)
    {
        $this->HardExpirationTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ClientAlertsAuthToken' => [],
            'HardExpirationTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetClientAlertsAuthTokenResponseType::_register();
