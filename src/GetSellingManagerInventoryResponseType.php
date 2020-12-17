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
 * Contains a list of the products created by the seller. The list of products is returned as a set of tags, in
 * which are returned zero, one, or multiple SellingManagerProductType objects. Each SellingManagerProductType
 * object contains the information about for one Selling Manager product and any Selling Manager templates the
 * product contains.
 **/
class GetSellingManagerInventoryResponseType extends EbatNs_Response
{
    const TAG = 'GetSellingManagerInventoryResponseType';
    const NAME = 'GetSellingManagerInventoryResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $InventoryCountLastCalculatedDate = null;

    /**
     * @var SellingManagerProductType[]|null
     */
    protected $SellingManagerProduct = [];

    /**
     * @var PaginationResultType|null
     */
    protected $PaginationResult = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInventoryCountLastCalculatedDate()
    {
        return $this->_dc($this->InventoryCountLastCalculatedDate, 'InventoryCountLastCalculatedDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setInventoryCountLastCalculatedDate($value)
    {
        $this->InventoryCountLastCalculatedDate = self::_string($value);
    }

    /**
     * @return SellingManagerProductType[]|SellingManagerProductType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getSellingManagerProduct($index = null)
    {
        return $this->_dc($index === null
            ? $this->SellingManagerProduct
            : (count($this->SellingManagerProduct) > $index
                ? $this->SellingManagerProduct[$index]
                : null), 'SellingManagerProduct');
    }

    /**
     * @param SellingManagerProductType|null|SellingManagerProductType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setSellingManagerProduct($value, $index = null)
    {
        if ($index === null) {
            $this->SellingManagerProduct = $value;
        } else {
            $this->SellingManagerProduct[$index] = [];
            
            foreach ($value as $item) {
                $this->addSellingManagerProduct($item);
            }
        }
    }

    /**
     * @param SellingManagerProductType|null $value
     * @return void
     */
    public function addSellingManagerProduct($value)
    {
        $this->SellingManagerProduct[] = $value;
    }

    /**
     * @return PaginationResultType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaginationResult()
    {
        return $this->_dc($this->PaginationResult, 'PaginationResult');
    }

    /**
     * @param PaginationResultType|null $value
     * @return void
     */
    public function setPaginationResult($value)
    {
        $this->PaginationResult = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'InventoryCountLastCalculatedDate' => [],
            'SellingManagerProduct' => ['type' => 'SellingManagerProductType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'PaginationResult' => ['type' => 'PaginationResultType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetSellingManagerInventoryResponseType::_register();
