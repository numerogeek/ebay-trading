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
class FlatShippingRateOptionCodeType extends EbatNs_EnumType
{
    const TAG = 'FlatShippingRateOptionCodeType';
    const NAME = 'FlatShippingRateOptionCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is not used.
     **/
    const CodeType_ChargeAmountForEachAdditionalItem = 'ChargeAmountForEachAdditionalItem';

    /**
     * This value is not used.
     **/
    const CodeType_DeductAmountFromEachAdditionalItem = 'DeductAmountFromEachAdditionalItem';

    /**
     * This value is not used.
     **/
    const CodeType_ShipAdditionalItemsFree = 'ShipAdditionalItemsFree';

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
     * @return FlatShippingRateOptionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param FlatShippingRateOptionCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isChargeAmountForEachAdditionalItem()
    {
        return $this->_value === self::CodeType_ChargeAmountForEachAdditionalItem;
    }

    /**
     * @return bool
     */
    public function isDeductAmountFromEachAdditionalItem()
    {
        return $this->_value === self::CodeType_DeductAmountFromEachAdditionalItem;
    }

    /**
     * @return bool
     */
    public function isShipAdditionalItemsFree()
    {
        return $this->_value === self::CodeType_ShipAdditionalItemsFree;
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

FlatShippingRateOptionCodeType::_register();
