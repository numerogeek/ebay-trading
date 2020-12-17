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
 * This enumerated type is used to specify if the discount used for a promotional sale is a price (dollar value)
 * discount or a percentage (of sale price) discount.
 **/
class DiscountCodeType extends EbatNs_EnumType
{
    const TAG = 'DiscountCodeType';
    const NAME = 'DiscountCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * The enumeration value indicates that the discount being offered is a percentage discount, which means a
     * percentage of the total price to the buyer is being discounted. So, if the total price for an order line item is
     * $100, the
     * DiscountType
     * is <code>Percentage</code>, and the
     * DiscountValue
     * is <code>15.0</code> (percent), the buyer will pay just $85.00 for the order line item.
     **/
    const CodeType_Percentage = 'Percentage';

    /**
     * The enumeration value indicates that the discount being offered is a price discount, which means the total price
     * to the buyer is being reduced by this amount. So, if the total price for an order line item is $100, the
     * DiscountType
     * is <code>Price</code>, and the
     * DiscountValue
     * is <code>20.0</code> (dollars), the buyer will pay just $80.00 for the order line item.
     **/
    const CodeType_Price = 'Price';

    /**
     * This value is reserved for future use.
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
     * @return DiscountCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param DiscountCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isPercentage()
    {
        return $this->_value === self::CodeType_Percentage;
    }

    /**
     * @return bool
     */
    public function isPrice()
    {
        return $this->_value === self::CodeType_Price;
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

DiscountCodeType::_register();
