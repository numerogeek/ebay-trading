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
 * Store color set.
 **/
class StoreColorType extends EbatNs_ComplexType
{
    const TAG = 'StoreColorType';
    const NAME = 'StoreColorType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Primary = null;

    /**
     * @var string|null
     */
    protected $Secondary = null;

    /**
     * @var string|null
     */
    protected $Accent = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPrimary()
    {
        return $this->_dc($this->Primary, 'Primary');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPrimary($value)
    {
        $this->Primary = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSecondary()
    {
        return $this->_dc($this->Secondary, 'Secondary');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSecondary($value)
    {
        $this->Secondary = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAccent()
    {
        return $this->_dc($this->Accent, 'Accent');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setAccent($value)
    {
        $this->Accent = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Primary' => [],
            'Secondary' => [],
            'Accent' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

StoreColorType::_register();
