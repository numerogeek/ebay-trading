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
 * This type is deprecated, as product warranties are no longer applicable or supported in eBay APIs.
 **/
class WarrantyDurationDetailsType extends EbatNs_ComplexType
{
    const TAG = 'WarrantyDurationDetailsType';
    const NAME = 'WarrantyDurationDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $WarrantyDurationOption = null;

    /**
     * @var string|null
     */
    protected $Description = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWarrantyDurationOption()
    {
        return $this->_dc($this->WarrantyDurationOption, 'WarrantyDurationOption');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setWarrantyDurationOption($value)
    {
        $this->WarrantyDurationOption = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDescription()
    {
        return $this->_dc($this->Description, 'Description');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDescription($value)
    {
        $this->Description = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'WarrantyDurationOption' => [],
            'Description' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

WarrantyDurationDetailsType::_register();
