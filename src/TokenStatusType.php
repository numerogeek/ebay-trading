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
 * Returns token status.
 **/
class TokenStatusType extends EbatNs_ComplexType
{
    const TAG = 'TokenStatusType';
    const NAME = 'TokenStatusType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var TokenStatusCodeType|null
     */
    protected $Status = null;

    /**
     * @var string|null
     */
    protected $EIASToken = null;

    /**
     * @var string|null
     */
    protected $ExpirationTime = null;

    /**
     * @var string|null
     */
    protected $RevocationTime = null;


    /**
     * @return TokenStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStatus()
    {
        return $this->_dc($this->Status);
    }

    /**
     * @param TokenStatusCodeType|null $value
     * @return void
     */
    public function setStatus($value)
    {
        $this->Status = $this->_enum($value, TokenStatusCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEIASToken()
    {
        return $this->_dc($this->EIASToken, 'EIASToken');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEIASToken($value)
    {
        $this->EIASToken = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExpirationTime()
    {
        return $this->_dc($this->ExpirationTime, 'ExpirationTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setExpirationTime($value)
    {
        $this->ExpirationTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRevocationTime()
    {
        return $this->_dc($this->RevocationTime, 'RevocationTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRevocationTime($value)
    {
        $this->RevocationTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Status' => ['type' => 'TokenStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'EIASToken' => [],
            'ExpirationTime' => [],
            'RevocationTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

TokenStatusType::_register();
