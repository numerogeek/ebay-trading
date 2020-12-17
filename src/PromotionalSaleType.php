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
 * Details for a single promotional sale.
 **/
class PromotionalSaleType extends EbatNs_ComplexType
{
    const TAG = 'PromotionalSaleType';
    const NAME = 'PromotionalSaleType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $PromotionalSaleID = null;

    /**
     * @var string|null
     */
    protected $PromotionalSaleName = null;

    /**
     * @var ItemIDArrayType|null
     */
    protected $PromotionalSaleItemIDArray = null;

    /**
     * @var PromotionalSaleStatusCodeType|null
     */
    protected $Status = null;

    /**
     * @var DiscountCodeType|null
     */
    protected $DiscountType = null;

    /**
     * @var float|null
     */
    protected $DiscountValue = null;

    /**
     * @var string|null
     */
    protected $PromotionalSaleStartTime = null;

    /**
     * @var string|null
     */
    protected $PromotionalSaleEndTime = null;

    /**
     * @var PromotionalSaleTypeCodeType|null
     */
    protected $PromotionalSaleType = null;


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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPromotionalSaleName()
    {
        return $this->_dc($this->PromotionalSaleName, 'PromotionalSaleName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPromotionalSaleName($value)
    {
        $this->PromotionalSaleName = self::_string($value);
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
     * @return PromotionalSaleStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStatus()
    {
        return $this->_dc($this->Status);
    }

    /**
     * @param PromotionalSaleStatusCodeType|null $value
     * @return void
     */
    public function setStatus($value)
    {
        $this->Status = $this->_enum($value, PromotionalSaleStatusCodeType::class);
    }

    /**
     * @return DiscountCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDiscountType()
    {
        return $this->_dc($this->DiscountType);
    }

    /**
     * @param DiscountCodeType|null $value
     * @return void
     */
    public function setDiscountType($value)
    {
        $this->DiscountType = $this->_enum($value, DiscountCodeType::class);
    }

    /**
     * @return float|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDiscountValue()
    {
        return $this->_dc($this->DiscountValue, 'DiscountValue');
    }

    /**
     * @param float|null $value
     * @return void
     */
    public function setDiscountValue($value)
    {
        $this->DiscountValue = self::_float($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPromotionalSaleStartTime()
    {
        return $this->_dc($this->PromotionalSaleStartTime, 'PromotionalSaleStartTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPromotionalSaleStartTime($value)
    {
        $this->PromotionalSaleStartTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPromotionalSaleEndTime()
    {
        return $this->_dc($this->PromotionalSaleEndTime, 'PromotionalSaleEndTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPromotionalSaleEndTime($value)
    {
        $this->PromotionalSaleEndTime = self::_string($value);
    }

    /**
     * @return PromotionalSaleTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPromotionalSaleType()
    {
        return $this->_dc($this->PromotionalSaleType);
    }

    /**
     * @param PromotionalSaleTypeCodeType|null $value
     * @return void
     */
    public function setPromotionalSaleType($value)
    {
        $this->PromotionalSaleType = $this->_enum($value, PromotionalSaleTypeCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'PromotionalSaleID' => ['type' => 'int'],
            'PromotionalSaleName' => [],
            'PromotionalSaleItemIDArray' => ['type' => 'ItemIDArrayType', 'xmlns' => self::XMLNS],
            'Status' => ['type' => 'PromotionalSaleStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'DiscountType' => ['type' => 'DiscountCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'DiscountValue' => ['type' => 'float'],
            'PromotionalSaleStartTime' => [],
            'PromotionalSaleEndTime' => [],
            'PromotionalSaleType' => ['type' => 'PromotionalSaleTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PromotionalSaleType::_register();
