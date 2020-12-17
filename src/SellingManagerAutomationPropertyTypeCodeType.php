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
 * Indicates the filters for Selling Manager automation listings.
 **/
class SellingManagerAutomationPropertyTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'SellingManagerAutomationPropertyTypeCodeType';
    const NAME = 'SellingManagerAutomationPropertyTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Item failed to be listed using automation rules.
     **/
    const CodeType_ItemListFailedAutomationRules = 'ItemListFailedAutomationRules';

    /**
     * Relist item automation rule failed.
     **/
    const CodeType_ItemRelistFailedAutomationRules = 'ItemRelistFailedAutomationRules';

    /**
     * Item failed to be listed with Second Chance offer automation rule.
     **/
    const CodeType_ItemListFailedSecondChanceOfferAutoRules = 'ItemListFailedSecondChanceOfferAutoRules';

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
     * @return SellingManagerAutomationPropertyTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SellingManagerAutomationPropertyTypeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isItemListFailedAutomationRules()
    {
        return $this->_value === self::CodeType_ItemListFailedAutomationRules;
    }

    /**
     * @return bool
     */
    public function isItemRelistFailedAutomationRules()
    {
        return $this->_value === self::CodeType_ItemRelistFailedAutomationRules;
    }

    /**
     * @return bool
     */
    public function isItemListFailedSecondChanceOfferAutoRules()
    {
        return $this->_value === self::CodeType_ItemListFailedSecondChanceOfferAutoRules;
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

SellingManagerAutomationPropertyTypeCodeType::_register();
