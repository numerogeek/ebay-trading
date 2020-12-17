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
 * This enumerated type is deprecated.
 **/
class PromotionItemPriceTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'PromotionItemPriceTypeCodeType';
    const NAME = 'PromotionItemPriceTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is not used.
     **/
    const CodeType_AuctionPrice = 'AuctionPrice';

    /**
     * This value is not used.
     **/
    const CodeType_BuyItNowPrice = 'BuyItNowPrice';

    /**
     * This value is not used.
     **/
    const CodeType_BestOfferOnlyPrice = 'BestOfferOnlyPrice';

    /**
     * This value is not used.
     **/
    const CodeType_ClassifiedAdPrice = 'ClassifiedAdPrice';

    /**
     * This value is not used.
     **/
    const CodeType_CustomCode = 'CustomCode';
    
    /**
     * @var string|null
     */
    protected $_value = null;


    /**
     * @param string|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return PromotionItemPriceTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PromotionItemPriceTypeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isAuctionPrice()
    {
        return $this->_value === self::CodeType_AuctionPrice;
    }

    /**
     * @return bool
     */
    public function isBuyItNowPrice()
    {
        return $this->_value === self::CodeType_BuyItNowPrice;
    }

    /**
     * @return bool
     */
    public function isBestOfferOnlyPrice()
    {
        return $this->_value === self::CodeType_BestOfferOnlyPrice;
    }

    /**
     * @return bool
     */
    public function isClassifiedAdPrice()
    {
        return $this->_value === self::CodeType_ClassifiedAdPrice;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

PromotionItemPriceTypeCodeType::_register();
