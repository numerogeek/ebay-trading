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
class RefundLineArrayType extends EbatNs_ComplexType
{
    const TAG = 'RefundLineArrayType';
    const NAME = 'RefundLineArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var RefundLineType[]|null
     */
    protected $RefundLine = [];


    /**
     * @return RefundLineType[]|RefundLineType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getRefundLine($index = null)
    {
        return $this->_dc($index === null
            ? $this->RefundLine
            : (count($this->RefundLine) > $index
                ? $this->RefundLine[$index]
                : null), 'RefundLine');
    }

    /**
     * @param RefundLineType|null|RefundLineType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setRefundLine($value, $index = null)
    {
        if ($index === null) {
            $this->RefundLine = $value;
        } else {
            $this->RefundLine[$index] = [];
            
            foreach ($value as $item) {
                $this->addRefundLine($item);
            }
        }
    }

    /**
     * @param RefundLineType|null $value
     * @return void
     */
    public function addRefundLine($value)
    {
        $this->RefundLine[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['RefundLine' => ['type' => 'RefundLineType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

RefundLineArrayType::_register();
