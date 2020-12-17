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
 * Store theme.
 **/
class StoreThemeType extends EbatNs_ComplexType
{
    const TAG = 'StoreThemeType';
    const NAME = 'StoreThemeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $ThemeID = null;

    /**
     * @var string|null
     */
    protected $Name = null;

    /**
     * @var StoreColorSchemeType|null
     */
    protected $ColorScheme = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getThemeID()
    {
        return $this->_dc($this->ThemeID, 'ThemeID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setThemeID($value)
    {
        $this->ThemeID = self::_int($value);
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
     * @return StoreColorSchemeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getColorScheme()
    {
        return $this->_dc($this->ColorScheme, 'ColorScheme');
    }

    /**
     * @param StoreColorSchemeType|null $value
     * @return void
     */
    public function setColorScheme($value)
    {
        $this->ColorScheme = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ThemeID' => ['type' => 'int'],
            'Name' => [],
            'ColorScheme' => ['type' => 'StoreColorSchemeType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

StoreThemeType::_register();
