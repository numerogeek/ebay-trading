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
 * This enumerated type defines the values that can be used when adding, modiying, or
 * deleting a shipping discount profile (through the
 * ModifyActionCode
 * field in
 * SetShippingDiscountProfiles
 * ), or when adding, modiying, or
 * deleting a promotional sale (through the
 * Action
 * field in
 * SetPromotionalSale
 * ), or when adding or removing one or more
 * listings from the promotional sale (through the
 * Action
 * field in
 * SetPromotionalSaleListings
 * ).
 * 
 * For
 * SetPromotionalSaleListings
 * , the specified action ('Add' or
 * 'Delete') will apply to all listings specified in the
 * PromotionalSaleItemIDArray
 * container. A promotional sale can also be applied to all listings of a specified
 * category (using
 * CategoryID
 * in the
 * 
 * SetPromotionalSaleListings
 * request). However, an entire category
 * of listings cannot be removed from a promotional sale. In other words, the
 * 
 * Action
 * field cannot be set to 'Delete' if a
 * 
 * CategoryID
 * is specified.
 **/
class ModifyActionCodeType extends EbatNs_EnumType
{
    const TAG = 'ModifyActionCodeType';
    const NAME = 'ModifyActionCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * For
     * SetPromotionalSale
     * , this value is used in the request to
     * create a new promotional sale.
     * 
     * For
     * SetPromotionalSaleListings
     * , this value is used in the request
     * to apply an existing promotional sale to one or more active items or to an entire
     * category of active items.
     * 
     * For
     * SetShippingDiscountProfiles
     * , this value is used in the request
     * to create a new shipping discount profile.
     **/
    const CodeType_Add = 'Add';

    /**
     * For
     * SetPromotionalSale
     * , this value is used in the request to
     * delete an existing promotional sale.
     * 
     * For
     * SetPromotionalSaleListings
     * , this value is used in the request
     * to remove one or more active items from an existing promotional sale. This value
     * cannot be used if a
     * CategoryID
     * is specified in the request.
     * 
     * For
     * SetShippingDiscountProfiles
     * , this value is used in the request
     * to delete an existing shipping discount profile.
     **/
    const CodeType_Delete = 'Delete';

    /**
     * For
     * SetPromotionalSale
     * , this value is used in the request to
     * modify an existing promotional sale.
     * 
     * For
     * SetShippingDiscountProfiles
     * , this value is used in the request
     * to modify an existing shipping discount profile.
     **/
    const CodeType_Update = 'Update';

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
     * @return ModifyActionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ModifyActionCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isAdd()
    {
        return $this->_value === self::CodeType_Add;
    }

    /**
     * @return bool
     */
    public function isDelete()
    {
        return $this->_value === self::CodeType_Delete;
    }

    /**
     * @return bool
     */
    public function isUpdate()
    {
        return $this->_value === self::CodeType_Update;
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

ModifyActionCodeType::_register();
