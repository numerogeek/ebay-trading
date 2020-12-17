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
 * This enumerated type is deprecated.
 **/
class CalculatedShippingRateOptionCodeType extends EbatNs_EnumType
{
    const TAG = 'CalculatedShippingRateOptionCodeType';
    const NAME = 'CalculatedShippingRateOptionCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is not used.
     **/
    const CodeType_CombinedItemWeight = 'CombinedItemWeight';

    /**
     * This value is not used.
     **/
    const CodeType_IndividualItemWeight = 'IndividualItemWeight';

    /**
     * This value is not used.
     **/
    const CodeType_CustomCode = 'CustomCode';
    
    /**
     * @var string|null
     */
    protected $_value = null;


    /**
     * @param string|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return CalculatedShippingRateOptionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param CalculatedShippingRateOptionCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isCombinedItemWeight()
    {
        return $this->_value === self::CodeType_CombinedItemWeight;
    }

    /**
     * @return bool
     */
    public function isIndividualItemWeight()
    {
        return $this->_value === self::CodeType_IndividualItemWeight;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

CalculatedShippingRateOptionCodeType::_register();
