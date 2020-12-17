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
 * Returns a Selling Manager user's sold listings.
 * 
 * This call is subject to change without notice; the deprecation process is inapplicable to this call. The user
 * must have a Selling Manager Pro subscription to use this call.
 **/
class GetSellingManagerSoldListingsRequestType extends AbstractRequestType
{
    const TAG = 'GetSellingManagerSoldListingsRequest';
    const NAME = 'GetSellingManagerSoldListingsRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetSellingManagerSoldListings';

    /**
     * @var SellingManagerSearchType|null
     */
    protected $Search = null;

    /**
     * @var int|null
     */
    protected $StoreCategoryID = null;

    /**
     * @var SellingManagerSoldListingsPropertyTypeCodeType[]|null
     */
    protected $Filter = [];

    /**
     * @var bool|null "true" or "false"
     */
    protected $Archived = null;

    /**
     * @var SellingManagerSoldListingsSortTypeCodeType|null
     */
    protected $Sort = null;

    /**
     * @var SortOrderCodeType|null
     */
    protected $SortOrder = null;

    /**
     * @var PaginationType|null
     */
    protected $Pagination = null;

    /**
     * @var TimeRangeType|null
     */
    protected $SaleDateRange = null;


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
     * @return string[]|SellingManagerSoldListingsPropertyTypeCodeType|null|mixed Depending on the assigned data converter: mixed
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
     * @param SellingManagerSoldListingsPropertyTypeCodeType|null|string[] $value
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
     * @param SellingManagerSoldListingsPropertyTypeCodeType|null $value
     * @return void
     */
    public function addFilter($value)
    {
        $this->Filter[] = $this->_enum($value, SellingManagerSoldListingsPropertyTypeCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getArchived()
    {
        return $this->_dc($this->Archived === 'true', 'Archived');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setArchived($value)
    {
        $this->Archived = self::_bool($value);
    }

    /**
     * @return SellingManagerSoldListingsSortTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSort()
    {
        return $this->_dc($this->Sort);
    }

    /**
     * @param SellingManagerSoldListingsSortTypeCodeType|null $value
     * @return void
     */
    public function setSort($value)
    {
        $this->Sort = $this->_enum($value, SellingManagerSoldListingsSortTypeCodeType::class);
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
     * @return TimeRangeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSaleDateRange()
    {
        return $this->_dc($this->SaleDateRange, 'SaleDateRange');
    }

    /**
     * @param TimeRangeType|null $value
     * @return void
     */
    public function setSaleDateRange($value)
    {
        $this->SaleDateRange = $value;
    }

    /**
     * @return GetSellingManagerSoldListingsResponseType|EbatNs_ResponseError
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
            'Search' => ['type' => 'SellingManagerSearchType', 'xmlns' => self::XMLNS],
            'StoreCategoryID' => ['type' => 'int'],
            'Filter' => ['type' => 'SellingManagerSoldListingsPropertyTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'Archived' => ['type' => 'bool'],
            'Sort' => ['type' => 'SellingManagerSoldListingsSortTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'SortOrder' => ['type' => 'SortOrderCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Pagination' => ['type' => 'PaginationType', 'xmlns' => self::XMLNS],
            'SaleDateRange' => ['type' => 'TimeRangeType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetSellingManagerSoldListingsRequestType::_register();
