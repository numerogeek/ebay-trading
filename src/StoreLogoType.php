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
 * Store logo.
 **/
class StoreLogoType extends EbatNs_ComplexType
{
    const TAG = 'StoreLogoType';
    const NAME = 'StoreLogoType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $LogoID = null;

    /**
     * @var string|null
     */
    protected $Name = null;

    /**
     * @var string|null
     */
    protected $URL = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLogoID()
    {
        return $this->_dc($this->LogoID, 'LogoID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setLogoID($value)
    {
        $this->LogoID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getName()
    {
        return $this->_dc($this->Name, 'Name');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setName($value)
    {
        $this->Name = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getURL()
    {
        return $this->_dc($this->URL, 'URL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setURL($value)
    {
        $this->URL = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'LogoID' => ['type' => 'int'],
            'Name' => [],
            'URL' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

StoreLogoType::_register();
