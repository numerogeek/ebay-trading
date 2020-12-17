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
 * The base response of the
 * GetTokenStatus
 * call. This call retrieves the status of a user token.
 **/
class GetTokenStatusResponseType extends EbatNs_Response
{
    const TAG = 'GetTokenStatusResponseType';
    const NAME = 'GetTokenStatusResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var TokenStatusType|null
     */
    protected $TokenStatus = null;


    /**
     * @return TokenStatusType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTokenStatus()
    {
        return $this->_dc($this->TokenStatus, 'TokenStatus');
    }

    /**
     * @param TokenStatusType|null $value
     * @return void
     */
    public function setTokenStatus($value)
    {
        $this->TokenStatus = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['TokenStatus' => ['type' => 'TokenStatusType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

GetTokenStatusResponseType::_register();
