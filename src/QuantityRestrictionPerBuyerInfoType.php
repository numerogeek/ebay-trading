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
 * This type defines the
 * QuantityRestrictionPerBuyer
 * container, which is
 * used by the seller to restrict the quantity of items that may be purchased by one buyer
 * during the duration of a fixed-price listing (single or multi-variation).
 **/
class QuantityRestrictionPerBuyerInfoType extends EbatNs_ComplexType
{
    const TAG = 'QuantityRestrictionPerBuyerInfoType';
    const NAME = 'QuantityRestrictionPerBuyerInfoType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $MaximumQuantity = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaximumQuantity()
    {
        return $this->_dc($this->MaximumQuantity, 'MaximumQuantity');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMaximumQuantity($value)
    {
        $this->MaximumQuantity = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['MaximumQuantity' => ['type' => 'int']], parent::NAME);
        self::assignAttributes([]);
    }

}

QuantityRestrictionPerBuyerInfoType::_register();
