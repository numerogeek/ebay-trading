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
 * Enumerated type that indicates if a specific Item Specific can be used to classify pictures in a
 * multiple-variation listing. For example, in a multiple-variation listing that featured t-shirts of numerous
 * colors and sizes, the 'Color' Item Specific would most likely be 'Enabled', and would be a good candidate value
 * for the
 * Variations.Pictures.VariationSpecificName
 * field in a 'FixedPriceItem' call when creating, revising, or relisting an item. Then, the seller would provide
 * URLs to multiple pictures showcasing the available colors of the shirts. These URLs are specified through
 * multiple
 * Variations.Pictures.VariationSpecificPictureSet.PictureURL
 * fields.
 **/
class VariationPictureRuleCodeType extends EbatNs_EnumType
{
    const TAG = 'VariationPictureRuleCodeType';
    const NAME = 'VariationPictureRuleCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the corresponding Item Specific name must be used in the
     * Variations.Pictures.VariationSpecificName
     * field if the   seller is providing picture URLs through the
     * Variations.Pictures.VariationSpecificPictureSet
     * container in a 'FixedPriceItem' call when creating, revising, or relisting an item.
     **/
    const CodeType_Required = 'Required';

    /**
     * This value indicates that the corresponding Item Specific name can be used in the
     * Variations.Pictures.VariationSpecificName
     * field if the   seller is providing picture URLs through the
     * Variations.Pictures.VariationSpecificPictureSet
     * container in a 'FixedPriceItem' call when creating, revising, or relisting an item. Unlike the 'Required' value,
     * 'Enabled' indicates that corresponding Item Specific name is just one option, and they may be other options to
     * use as a
     * VariationSpecificName
     * value.
     **/
    const CodeType_Enabled = 'Enabled';

    /**
     * This value indicates that the corresponding Item Specific name cannot be used in the
     * Variations.Pictures.VariationSpecificName
     * field if the seller is providing picture URLs through the
     * Variations.Pictures.VariationSpecificPictureSet
     * container in a 'FixedPriceItem' call when creating, revising, or relisting an item. The seller will have to find
     * an Item Specific that is either 'Enabled' or 'Required'  to use as a
     * VariationSpecificName
     * value.
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
     * @return VariationPictureRuleCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param VariationPictureRuleCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isRequired()
    {
        return $this->_value === self::CodeType_Required;
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

VariationPictureRuleCodeType::_register();
