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
 * Contains a seller's cut off time preferences for same day handling for item shipping.
 **/
class DispatchCutoffTimePreferencesType extends EbatNs_ComplexType
{
    const TAG = 'DispatchCutoffTimePreferencesType';
    const NAME = 'DispatchCutoffTimePreferencesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $CutoffTime = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCutoffTime()
    {
        return $this->_dc($this->CutoffTime, 'CutoffTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCutoffTime($value)
    {
        $this->CutoffTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['CutoffTime' => []], parent::NAME);
        self::assignAttributes([]);
    }

}

DispatchCutoffTimePreferencesType::_register();
