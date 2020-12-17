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
 * Indicates the filters for Selling Manager Inventory listings.
 **/
class SellingManagerInventoryPropertyTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'SellingManagerInventoryPropertyTypeCodeType';
    const NAME = 'SellingManagerInventoryPropertyTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Products which are out of stock.
     **/
    const CodeType_ProductsOutOfStock = 'ProductsOutOfStock';

    /**
     * Products that are active.
     **/
    const CodeType_Active = 'Active';

    /**
     * Products that are inactive.
     **/
    const CodeType_InActive = 'InActive';

    /**
     * Products low on inventory.
     **/
    const CodeType_LowStock = 'LowStock';

    /**
     * Products with listings.
     **/
    const CodeType_WithListings = 'WithListings';

    /**
     * Products without listings.
     **/
    const CodeType_WithoutListings = 'WithoutListings';

    /**
     * (out) Reserved for internal or future use.
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
     * @return SellingManagerInventoryPropertyTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SellingManagerInventoryPropertyTypeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isProductsOutOfStock()
    {
        return $this->_value === self::CodeType_ProductsOutOfStock;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->_value === self::CodeType_Active;
    }

    /**
     * @return bool
     */
    public function isInActive()
    {
        return $this->_value === self::CodeType_InActive;
    }

    /**
     * @return bool
     */
    public function isLowStock()
    {
        return $this->_value === self::CodeType_LowStock;
    }

    /**
     * @return bool
     */
    public function isWithListings()
    {
        return $this->_value === self::CodeType_WithListings;
    }

    /**
     * @return bool
     */
    public function isWithoutListings()
    {
        return $this->_value === self::CodeType_WithoutListings;
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

SellingManagerInventoryPropertyTypeCodeType::_register();
