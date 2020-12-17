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
 * This enumerated type is used by the
 * AspectUsage
 * field that is returned in
 * GetCategorySpecifics
 * to indicate if an Item Specific is defined/derived from an eBay catalog product, or if the Item Specific is
 * typically unique to a particular instance of a product in that category.
 **/
class AspectUsageCodeType extends EbatNs_EnumType
{
    const TAG = 'AspectUsageCodeType';
    const NAME = 'AspectUsageCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that the Item Specific in the corresponding
     * NameRecommendation.Name
     * field is defined/derived from an eBay catalog product. 'Product' Item Specifics are also referred to as Product
     * Aspects in Web flows and other APIs. Generally, catalog product-based Item Specifics should not be modified if
     * the seller created/revise/relisted the item based on an eBay catalog product.
     **/
    const CodeType_Product = 'Product';

    /**
     * This enumeration value indicates that the Item Specific in the corresponding
     * NameRecommendation.Name
     * field is an 'instance aspect', which is an Item Specific whose value will vary based on a particular instance of
     * the product. When creating a listing, the seller should pass in the name-value pair for this Item Specific
     * through the
     * Item.ItemSpecifics.NameValueList
     * container of an
     * AddItem
     * call.
     **/
    const CodeType_Instance = 'Instance';

    /**
     * Reserved for future use.
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
     * @return AspectUsageCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param AspectUsageCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isProduct()
    {
        return $this->_value === self::CodeType_Product;
    }

    /**
     * @return bool
     */
    public function isInstance()
    {
        return $this->_value === self::CodeType_Instance;
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

AspectUsageCodeType::_register();
