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
 * NameRecommendation.ValidationRules.UsageConstraint
 * field that is returned in
 * GetCategorySpecifics
 * for each item specific that is returned in the response. The enumeration value returned in the
 * UsageConstraint
 * will indicate whether the item specific is required, recommended, or optional.
 **/
class UsageConstraintCodeType extends EbatNs_EnumType
{
    const TAG = 'UsageConstraintCodeType';
    const NAME = 'UsageConstraintCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that the corresponding item specific is completely optional for a listing in the
     * category, but the seller should still include it if the item specific is relevant to the product and its value is
     * known.
     **/
    const CodeType_Optional = 'Optional';

    /**
     * This enumeration value indicates that the corresponding item specific is typical and recommended for a listing in
     * the category, but not fully required. The seller should include this item specific if its value is known because
     * including it may improve search results and sale conversion.
     **/
    const CodeType_Recommended = 'Recommended';

    /**
     * This enumeration value indicates that the corresponding item specific is required for a listing in the category.
     * The seller must include this item specific or the listing may be blocked.
     **/
    const CodeType_Required = 'Required';

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
     * @return UsageConstraintCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param UsageConstraintCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isOptional()
    {
        return $this->_value === self::CodeType_Optional;
    }

    /**
     * @return bool
     */
    public function isRecommended()
    {
        return $this->_value === self::CodeType_Recommended;
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

UsageConstraintCodeType::_register();
