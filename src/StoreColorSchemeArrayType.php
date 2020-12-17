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
 * Set of eBay Store color schemes.
 **/
class StoreColorSchemeArrayType extends EbatNs_ComplexType
{
    const TAG = 'StoreColorSchemeArrayType';
    const NAME = 'StoreColorSchemeArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var StoreColorSchemeType[]|null
     */
    protected $ColorScheme = [];


    /**
     * @return StoreColorSchemeType[]|StoreColorSchemeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getColorScheme($index = null)
    {
        return $this->_dc($index === null
            ? $this->ColorScheme
            : (count($this->ColorScheme) > $index
                ? $this->ColorScheme[$index]
                : null), 'ColorScheme');
    }

    /**
     * @param StoreColorSchemeType|null|StoreColorSchemeType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setColorScheme($value, $index = null)
    {
        if ($index === null) {
            $this->ColorScheme = $value;
        } else {
            $this->ColorScheme[$index] = [];
            
            foreach ($value as $item) {
                $this->addColorScheme($item);
            }
        }
    }

    /**
     * @param StoreColorSchemeType|null $value
     * @return void
     */
    public function addColorScheme($value)
    {
        $this->ColorScheme[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['ColorScheme' => ['type' => 'StoreColorSchemeType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

StoreColorSchemeArrayType::_register();
