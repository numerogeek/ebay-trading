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
 * Type defining the
 * QuantityInfo
 * container, which consists of the
 * MinimumRemnantSet
 * field, which sets the minimum amount of event tickets that can remain in the fixed-price listing's inventory
 * after a buyer purchases one or more tickets (but not all) from the listing.
 **/
class QuantityInfoType extends EbatNs_ComplexType
{
    const TAG = 'QuantityInfoType';
    const NAME = 'QuantityInfoType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $MinimumRemnantSet = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMinimumRemnantSet()
    {
        return $this->_dc($this->MinimumRemnantSet, 'MinimumRemnantSet');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMinimumRemnantSet($value)
    {
        $this->MinimumRemnantSet = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['MinimumRemnantSet' => ['type' => 'int']], parent::NAME);
        self::assignAttributes([]);
    }

}

QuantityInfoType::_register();
