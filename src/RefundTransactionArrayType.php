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
class RefundTransactionArrayType extends EbatNs_ComplexType
{
    const TAG = 'RefundTransactionArrayType';
    const NAME = 'RefundTransactionArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var RefundTransactionType[]|null
     */
    protected $RefundTransaction = [];


    /**
     * @return RefundTransactionType[]|RefundTransactionType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getRefundTransaction($index = null)
    {
        return $this->_dc($index === null
            ? $this->RefundTransaction
            : (count($this->RefundTransaction) > $index
                ? $this->RefundTransaction[$index]
                : null), 'RefundTransaction');
    }

    /**
     * @param RefundTransactionType|null|RefundTransactionType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setRefundTransaction($value, $index = null)
    {
        if ($index === null) {
            $this->RefundTransaction = $value;
        } else {
            $this->RefundTransaction[$index] = [];
            
            foreach ($value as $item) {
                $this->addRefundTransaction($item);
            }
        }
    }

    /**
     * @param RefundTransactionType|null $value
     * @return void
     */
    public function addRefundTransaction($value)
    {
        $this->RefundTransaction[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['RefundTransaction' => ['type' => 'RefundTransactionType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

RefundTransactionArrayType::_register();
