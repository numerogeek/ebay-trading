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
 * <span class="tablenote">
 * Note:
 * While the Trading API continues to support item promotions for an eBay store owner, the Trading API will no
 * longer be enhanced with any new item promotion capabilities as they are developed by eBay. In addition, Promoted
 * Listings are also not supported by the Trading API. For these two reasons, it is recommended that
 * sellers/developers make plans to migrate to the
 * <a href="https://developer.ebay.com/api-docs/sell/marketing/overview.html">Marketing API</a>, which provides
 * all Promotions Manager and Promoted Listings capabilities, and this API will continue to be improved and enhanced
 * as more marketing features become available to sellers.
 * </span>
 * Enables the seller to change the item listings that are affected by a promotional sale. To use this call, the
 * seller must be a registered eBay Store owner.
 **/
class SetPromotionalSaleListingsRequestType extends AbstractRequestType
{
    const TAG = 'SetPromotionalSaleListingsRequest';
    const NAME = 'SetPromotionalSaleListingsRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'SetPromotionalSaleListings';

    /**
     * @var int|null
     */
    protected $PromotionalSaleID = null;

    /**
     * @var ModifyActionCodeType|null
     */
    protected $Action = null;

    /**
     * @var ItemIDArrayType|null
     */
    protected $PromotionalSaleItemIDArray = null;

    /**
     * @var int|null
     */
    protected $StoreCategoryID = null;

    /**
     * @var int|null
     */
    protected $CategoryID = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $AllFixedPriceItems = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $AllStoreInventoryItems = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $AllAuctionItems = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPromotionalSaleID()
    {
        return $this->_dc($this->PromotionalSaleID, 'PromotionalSaleID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPromotionalSaleID($value)
    {
        $this->PromotionalSaleID = self::_int($value);
    }

    /**
     * @return ModifyActionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAction()
    {
        return $this->_dc($this->Action);
    }

    /**
     * @param ModifyActionCodeType|null $value
     * @return void
     */
    public function setAction($value)
    {
        $this->Action = $this->_enum($value, ModifyActionCodeType::class);
    }

    /**
     * @return ItemIDArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPromotionalSaleItemIDArray()
    {
        return $this->_dc($this->PromotionalSaleItemIDArray, 'PromotionalSaleItemIDArray');
    }

    /**
     * @param ItemIDArrayType|null $value
     * @return void
     */
    public function setPromotionalSaleItemIDArray($value)
    {
        $this->PromotionalSaleItemIDArray = $value;
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
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategoryID()
    {
        return $this->_dc($this->CategoryID, 'CategoryID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setCategoryID($value)
    {
        $this->CategoryID = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAllFixedPriceItems()
    {
        return $this->_dc($this->AllFixedPriceItems === 'true', 'AllFixedPriceItems');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setAllFixedPriceItems($value)
    {
        $this->AllFixedPriceItems = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAllStoreInventoryItems()
    {
        return $this->_dc($this->AllStoreInventoryItems === 'true', 'AllStoreInventoryItems');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setAllStoreInventoryItems($value)
    {
        $this->AllStoreInventoryItems = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAllAuctionItems()
    {
        return $this->_dc($this->AllAuctionItems === 'true', 'AllAuctionItems');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setAllAuctionItems($value)
    {
        $this->AllAuctionItems = self::_bool($value);
    }

    /**
     * @return SetPromotionalSaleListingsResponseType|EbatNs_ResponseError
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
            'PromotionalSaleID' => ['type' => 'int'],
            'Action' => ['type' => 'ModifyActionCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PromotionalSaleItemIDArray' => ['type' => 'ItemIDArrayType', 'xmlns' => self::XMLNS],
            'StoreCategoryID' => ['type' => 'int'],
            'CategoryID' => ['type' => 'int'],
            'AllFixedPriceItems' => ['type' => 'bool'],
            'AllStoreInventoryItems' => ['type' => 'bool'],
            'AllAuctionItems' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SetPromotionalSaleListingsRequestType::_register();
