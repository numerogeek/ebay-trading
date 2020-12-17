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
 * Store Preferences type.
 **/
class StorePreferencesType extends EbatNs_ComplexType
{
    const TAG = 'StorePreferencesType';
    const NAME = 'StorePreferencesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var StoreVacationPreferencesType|null
     */
    protected $VacationPreferences = null;


    /**
     * @return StoreVacationPreferencesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVacationPreferences()
    {
        return $this->_dc($this->VacationPreferences, 'VacationPreferences');
    }

    /**
     * @param StoreVacationPreferencesType|null $value
     * @return void
     */
    public function setVacationPreferences($value)
    {
        $this->VacationPreferences = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['VacationPreferences' => ['type' => 'StoreVacationPreferencesType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

StorePreferencesType::_register();
