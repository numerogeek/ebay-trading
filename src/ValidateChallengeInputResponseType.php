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
 * ValidateChallengeInput
 * call. The response indicates whether the botblock challenge was successful.
 **/
class ValidateChallengeInputResponseType extends EbatNs_Response
{
    const TAG = 'ValidateChallengeInputResponseType';
    const NAME = 'ValidateChallengeInputResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $ValidToken = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getValidToken()
    {
        return $this->_dc($this->ValidToken === 'true', 'ValidToken');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setValidToken($value)
    {
        $this->ValidToken = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['ValidToken' => ['type' => 'bool']], parent::NAME);
        self::assignAttributes([]);
    }

}

ValidateChallengeInputResponseType::_register();
