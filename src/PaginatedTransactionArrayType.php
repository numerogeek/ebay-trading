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
 * Contains a paginated list of order line items.
 **/
class PaginatedTransactionArrayType extends EbatNs_ComplexType
{
    const TAG = 'PaginatedTransactionArrayType';
    const NAME = 'PaginatedTransactionArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var TransactionArrayType|null
     */
    protected $TransactionArray = null;

    /**
     * @var PaginationResultType|null
     */
    protected $PaginationResult = null;


    /**
     * @return TransactionArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTransactionArray()
    {
        return $this->_dc($this->TransactionArray, 'TransactionArray');
    }

    /**
     * @param TransactionArrayType|null $value
     * @return void
     */
    public function setTransactionArray($value)
    {
        $this->TransactionArray = $value;
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
            'TransactionArray' => ['type' => 'TransactionArrayType', 'xmlns' => self::XMLNS],
            'PaginationResult' => ['type' => 'PaginationResultType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PaginatedTransactionArrayType::_register();
