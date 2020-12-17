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
 * GetSessionID
 * call. This response will include the generated
 * SessionID
 * value, which is a unique identifier for authenticating data entry during the process that creates a user token.
 **/
class GetSessionIDResponseType extends EbatNs_Response
{
    const TAG = 'GetSessionIDResponseType';
    const NAME = 'GetSessionIDResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $SessionID = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSessionID()
    {
        return $this->_dc($this->SessionID, 'SessionID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSessionID($value)
    {
        $this->SessionID = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['SessionID' => []], parent::NAME);
        self::assignAttributes([]);
    }

}

GetSessionIDResponseType::_register();
