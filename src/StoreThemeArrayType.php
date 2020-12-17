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
 * Set of Store themes.
 **/
class StoreThemeArrayType extends EbatNs_ComplexType
{
    const TAG = 'StoreThemeArrayType';
    const NAME = 'StoreThemeArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var StoreThemeType[]|null
     */
    protected $Theme = [];

    /**
     * @var StoreColorSchemeArrayType|null
     */
    protected $GenericColorSchemeArray = null;


    /**
     * @return StoreThemeType[]|StoreThemeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getTheme($index = null)
    {
        return $this->_dc($index === null
            ? $this->Theme
            : (count($this->Theme) > $index
                ? $this->Theme[$index]
                : null), 'Theme');
    }

    /**
     * @param StoreThemeType|null|StoreThemeType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setTheme($value, $index = null)
    {
        if ($index === null) {
            $this->Theme = $value;
        } else {
            $this->Theme[$index] = [];
            
            foreach ($value as $item) {
                $this->addTheme($item);
            }
        }
    }

    /**
     * @param StoreThemeType|null $value
     * @return void
     */
    public function addTheme($value)
    {
        $this->Theme[] = $value;
    }

    /**
     * @return StoreColorSchemeArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGenericColorSchemeArray()
    {
        return $this->_dc($this->GenericColorSchemeArray, 'GenericColorSchemeArray');
    }

    /**
     * @param StoreColorSchemeArrayType|null $value
     * @return void
     */
    public function setGenericColorSchemeArray($value)
    {
        $this->GenericColorSchemeArray = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Theme' => ['type' => 'StoreThemeType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'GenericColorSchemeArray' => ['type' => 'StoreColorSchemeArrayType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

StoreThemeArrayType::_register();
