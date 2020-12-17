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
 * This enumerated type contains the values that indicate whether or not a product brand within an eBay category
 * requires association with an eBay catalog product.
 * 
 * 
 * <span class="tablenote">
 * Note:
 * Due to the rollback of the Product-Based Shopping Experience mandate for all eBay categories (and brands
 * within those categories), the
 * ValidationRules.ProductRequired
 * field will not get returned for any brands within any eBay category. Due to this fact, the
 * ProductRequiredCodeType
 * is currently not applicable.
 * </span>
 **/
class ProductRequiredCodeType extends EbatNs_EnumType
{
    const TAG = 'ProductRequiredCodeType';
    const NAME = 'ProductRequiredCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * If this enumeration value is returned for a product brand within a category, the eBay seller is not expected to
     * use an eBay catalog product when creating or revising their listing in this category for this product brand.
     **/
    const CodeType_Disabled = 'Disabled';

    /**
     * If this enumeration value is returned for a product brand within a category, the eBay seller should use an eBay
     * catalog product when creating or revising their listing in this category for this product brand. Using an eBay
     * catalog product for the specific category/brand to create/revise the listing is not a hard mandate, but it is
     * necessary if the seller would like the listing to appear in product-based listing search results.
     **/
    const CodeType_Enabled = 'Enabled';

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
     * @return ProductRequiredCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ProductRequiredCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isDisabled()
    {
        return $this->_value === self::CodeType_Disabled;
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->_value === self::CodeType_Enabled;
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

ProductRequiredCodeType::_register();
