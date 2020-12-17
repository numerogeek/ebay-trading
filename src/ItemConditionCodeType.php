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
 * Specifies a predefined subset of item conditions. The predefined set of fields
 * can vary for different calls.
 **/
class ItemConditionCodeType extends EbatNs_EnumType
{
    const TAG = 'ItemConditionCodeType';
    const NAME = 'ItemConditionCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * The seller specified the Item Condition as New, or
     * did not specify a condition.
     * (Excludes items that the seller listed as Used.)
     **/
    const CodeType_New = 'New';

    /**
     * The seller specified the Item Condition as Used, or
     * did not specify a condition.
     * (Excludes items that the seller listed as New.)
     **/
    const CodeType_Used = 'Used';

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
     * @return ItemConditionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ItemConditionCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isNew()
    {
        return $this->_value === self::CodeType_New;
    }

    /**
     * @return bool
     */
    public function isUsed()
    {
        return $this->_value === self::CodeType_Used;
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

ItemConditionCodeType::_register();
