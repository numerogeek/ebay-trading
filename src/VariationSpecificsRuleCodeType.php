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
 * This enumerated type is used to indicate if an Item Specific can be used at the variation level of a listing.
 * This type is only applicable to categories that support multiple-variation listings. If an Item Specific cannot
 * be used at the variation level, it usually indicates that the particular Item Specific should only be specified
 * at the listing-level, as it is a product aspect that should be shared by all variations in the multiple-variation
 * listing.
 **/
class VariationSpecificsRuleCodeType extends EbatNs_EnumType
{
    const TAG = 'VariationSpecificsRuleCodeType';
    const NAME = 'VariationSpecificsRuleCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the corresponding Item Specific can be specified at the variation level. In the
     * AddFixedPriceItem
     * call, variation-specific name-value pairs are specified under the
     * Variation.VariationSpecifics.NameValueList
     * container.
     **/
    const CodeType_Enabled = 'Enabled';

    /**
     * This value indicates that the corresponding Item Specific cannot be specified at the variation level. If an Item
     * Specific cannot be used at the variation level, it usually indicates that the particular Item Specific should
     * only be specified at the listing-level, as it is a product aspect that should be shared by all variations in the
     * multiple-variation listing.
     **/
    const CodeType_Disabled = 'Disabled';

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
     * @return VariationSpecificsRuleCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param VariationSpecificsRuleCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
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
    public function isDisabled()
    {
        return $this->_value === self::CodeType_Disabled;
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

VariationSpecificsRuleCodeType::_register();
