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
 * Values specify or indicate the type of promotional sale offered.
 * Promotional sales give store owners the ability to apply discounts and/or
 * free shipping across many listings for a specific duration.
 **/
class PromotionalSaleTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'PromotionalSaleTypeCodeType';
    const NAME = 'PromotionalSaleTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Sale offers price discount only.
     **/
    const CodeType_PriceDiscountOnly = 'PriceDiscountOnly';

    /**
     * Sale offers free shipping only.
     **/
    const CodeType_FreeShippingOnly = 'FreeShippingOnly';

    /**
     * Sale offers both price discount and free shipping.
     **/
    const CodeType_PriceDiscountAndFreeShipping = 'PriceDiscountAndFreeShipping';

    /**
     * Reserved for internal or future use.
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
     * @return PromotionalSaleTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PromotionalSaleTypeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isPriceDiscountOnly()
    {
        return $this->_value === self::CodeType_PriceDiscountOnly;
    }

    /**
     * @return bool
     */
    public function isFreeShippingOnly()
    {
        return $this->_value === self::CodeType_FreeShippingOnly;
    }

    /**
     * @return bool
     */
    public function isPriceDiscountAndFreeShipping()
    {
        return $this->_value === self::CodeType_PriceDiscountAndFreeShipping;
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

PromotionalSaleTypeCodeType::_register();
