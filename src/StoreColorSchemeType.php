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
 * Store color scheme.
 **/
class StoreColorSchemeType extends EbatNs_ComplexType
{
    const TAG = 'StoreColorSchemeType';
    const NAME = 'StoreColorSchemeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $ColorSchemeID = null;

    /**
     * @var string|null
     */
    protected $Name = null;

    /**
     * @var StoreColorType|null
     */
    protected $Color = null;

    /**
     * @var StoreFontType|null
     */
    protected $Font = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getColorSchemeID()
    {
        return $this->_dc($this->ColorSchemeID, 'ColorSchemeID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setColorSchemeID($value)
    {
        $this->ColorSchemeID = self::_int($value);
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
     * @return StoreColorType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getColor()
    {
        return $this->_dc($this->Color, 'Color');
    }

    /**
     * @param StoreColorType|null $value
     * @return void
     */
    public function setColor($value)
    {
        $this->Color = $value;
    }

    /**
     * @return StoreFontType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFont()
    {
        return $this->_dc($this->Font, 'Font');
    }

    /**
     * @param StoreFontType|null $value
     * @return void
     */
    public function setFont($value)
    {
        $this->Font = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ColorSchemeID' => ['type' => 'int'],
            'Name' => [],
            'Color' => ['type' => 'StoreColorType', 'xmlns' => self::XMLNS],
            'Font' => ['type' => 'StoreFontType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

StoreColorSchemeType::_register();
