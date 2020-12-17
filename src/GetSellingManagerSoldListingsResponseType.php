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
 * Returns a Selling Manager user's sold listings. Response can be filtered by date, search
 * values, and stores.
 **/
class GetSellingManagerSoldListingsResponseType extends EbatNs_Response
{
    const TAG = 'GetSellingManagerSoldListingsResponseType';
    const NAME = 'GetSellingManagerSoldListingsResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SellingManagerSoldOrderType[]|null
     */
    protected $SaleRecord = [];

    /**
     * @var PaginationResultType|null
     */
    protected $PaginationResult = null;


    /**
     * @return SellingManagerSoldOrderType[]|SellingManagerSoldOrderType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getSaleRecord($index = null)
    {
        return $this->_dc($index === null
            ? $this->SaleRecord
            : (count($this->SaleRecord) > $index
                ? $this->SaleRecord[$index]
                : null), 'SaleRecord');
    }

    /**
     * @param SellingManagerSoldOrderType|null|SellingManagerSoldOrderType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setSaleRecord($value, $index = null)
    {
        if ($index === null) {
            $this->SaleRecord = $value;
        } else {
            $this->SaleRecord[$index] = [];
            
            foreach ($value as $item) {
                $this->addSaleRecord($item);
            }
        }
    }

    /**
     * @param SellingManagerSoldOrderType|null $value
     * @return void
     */
    public function addSaleRecord($value)
    {
        $this->SaleRecord[] = $value;
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
            'SaleRecord' => ['type' => 'SellingManagerSoldOrderType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'PaginationResult' => ['type' => 'PaginationResultType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetSellingManagerSoldListingsResponseType::_register();
