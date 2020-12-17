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
 * This type defines the available options the seller has for handling international returns.
 **/
class InternationalRefundMethodCodeType extends EbatNs_ComplexType
{
    const TAG = 'InternationalRefundMethodCodeType';
    const NAME = 'InternationalRefundMethodCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ReturnsRefundMethodCodeType[]|null
     */
    protected $InternationalRefundMethod = [];


    /**
     * @return string[]|ReturnsRefundMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getInternationalRefundMethod($index = null)
    {
        return $this->_dc($index === null
            ? $this->InternationalRefundMethod
            : (count($this->InternationalRefundMethod) > $index
                ? $this->InternationalRefundMethod[$index]
                : null));
    }

    /**
     * @param ReturnsRefundMethodCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setInternationalRefundMethod($value, $index = null)
    {
        if ($index === null) {
            $this->InternationalRefundMethod = $value;
        } else {
            $this->InternationalRefundMethod[$index] = [];
            
            foreach ($value as $item) {
                $this->addInternationalRefundMethod($item);
            }
        }
    }

    /**
     * @param ReturnsRefundMethodCodeType|null $value
     * @return void
     */
    public function addInternationalRefundMethod($value)
    {
        $this->InternationalRefundMethod[] = $this->_enum($value, ReturnsRefundMethodCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['InternationalRefundMethod' => ['type' => 'ReturnsRefundMethodCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

InternationalRefundMethodCodeType::_register();
