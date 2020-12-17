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
 * This type is deprecated.
 **/
class ProductFinderConstraintType extends EbatNs_ComplexType
{
    const TAG = 'ProductFinderConstraintType';
    const NAME = 'ProductFinderConstraintType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $DisplayName = null;

    /**
     * @var string|null
     */
    protected $DisplayValue = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisplayName()
    {
        return $this->_dc($this->DisplayName, 'DisplayName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDisplayName($value)
    {
        $this->DisplayName = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisplayValue()
    {
        return $this->_dc($this->DisplayValue, 'DisplayValue');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDisplayValue($value)
    {
        $this->DisplayValue = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'DisplayName' => [],
            'DisplayValue' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ProductFinderConstraintType::_register();
