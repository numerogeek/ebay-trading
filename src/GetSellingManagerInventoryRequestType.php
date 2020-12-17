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
 * Retrieves a paginated list containing details of a user's Selling Manager Inventory. This call is subject to
 * change without notice; the deprecation process is inapplicable to this call. The user must have a Selling Manager
 * Pro subscription to use this call.
 **/
class GetSellingManagerInventoryRequestType extends AbstractRequestType
{
    const TAG = 'GetSellingManagerInventoryRequest';
    const NAME = 'GetSellingManagerInventoryRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetSellingManagerInventory';

    /**
     * @var SellingManagerProductSortCodeType|null
     */
    protected $Sort = null;

    /**
     * @var int|null
     */
    protected $FolderID = null;

    /**
     * @var PaginationType|null
     */
    protected $Pagination = null;

    /**
     * @var SortOrderCodeType|null
     */
    protected $SortOrder = null;

    /**
     * @var SellingManagerSearchType|null
     */
    protected $Search = null;

    /**
     * @var int|null
     */
    protected $StoreCategoryID = null;

    /**
     * @var SellingManagerInventoryPropertyTypeCodeType[]|null
     */
    protected $Filter = [];


    /**
     * @return SellingManagerProductSortCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSort()
    {
        return $this->_dc($this->Sort);
    }

    /**
     * @param SellingManagerProductSortCodeType|null $value
     * @return void
     */
    public function setSort($value)
    {
        $this->Sort = $this->_enum($value, SellingManagerProductSortCodeType::class);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFolderID()
    {
        return $this->_dc($this->FolderID, 'FolderID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setFolderID($value)
    {
        $this->FolderID = self::_int($value);
    }

    /**
     * @return PaginationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPagination()
    {
        return $this->_dc($this->Pagination, 'Pagination');
    }

    /**
     * @param PaginationType|null $value
     * @return void
     */
    public function setPagination($value)
    {
        $this->Pagination = $value;
    }

    /**
     * @return SortOrderCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSortOrder()
    {
        return $this->_dc($this->SortOrder);
    }

    /**
     * @param SortOrderCodeType|null $value
     * @return void
     */
    public function setSortOrder($value)
    {
        $this->SortOrder = $this->_enum($value, SortOrderCodeType::class);
    }

    /**
     * @return SellingManagerSearchType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSearch()
    {
        return $this->_dc($this->Search, 'Search');
    }

    /**
     * @param SellingManagerSearchType|null $value
     * @return void
     */
    public function setSearch($value)
    {
        $this->Search = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStoreCategoryID()
    {
        return $this->_dc($this->StoreCategoryID, 'StoreCategoryID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setStoreCategoryID($value)
    {
        $this->StoreCategoryID = self::_int($value);
    }

    /**
     * @return string[]|SellingManagerInventoryPropertyTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getFilter($index = null)
    {
        return $this->_dc($index === null
            ? $this->Filter
            : (count($this->Filter) > $index
                ? $this->Filter[$index]
                : null));
    }

    /**
     * @param SellingManagerInventoryPropertyTypeCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setFilter($value, $index = null)
    {
        if ($index === null) {
            $this->Filter = $value;
        } else {
            $this->Filter[$index] = [];
            
            foreach ($value as $item) {
                $this->addFilter($item);
            }
        }
    }

    /**
     * @param SellingManagerInventoryPropertyTypeCodeType|null $value
     * @return void
     */
    public function addFilter($value)
    {
        $this->Filter[] = $this->_enum($value, SellingManagerInventoryPropertyTypeCodeType::class);
    }

    /**
     * @return GetSellingManagerInventoryResponseType|EbatNs_ResponseError
     * @param EbatNs_Client
     **/
    function call($client)
    {
        return $client->call(self::REQUEST, $this);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Sort' => ['type' => 'SellingManagerProductSortCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'FolderID' => ['type' => 'int'],
            'Pagination' => ['type' => 'PaginationType', 'xmlns' => self::XMLNS],
            'SortOrder' => ['type' => 'SortOrderCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Search' => ['type' => 'SellingManagerSearchType', 'xmlns' => self::XMLNS],
            'StoreCategoryID' => ['type' => 'int'],
            'Filter' => ['type' => 'SellingManagerInventoryPropertyTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetSellingManagerInventoryRequestType::_register();
