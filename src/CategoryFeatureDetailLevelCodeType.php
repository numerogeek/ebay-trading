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
 * This type is deprecated. Use
 * DetailLevelCodeType
 * instead.
 **/
class CategoryFeatureDetailLevelCodeType extends EbatNs_EnumType
{
    const TAG = 'CategoryFeatureDetailLevelCodeType';
    const NAME = 'CategoryFeatureDetailLevelCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Return all available data.
     **/
    const CodeType_ReturnAll = 'ReturnAll';

    /**
     * Return the category feature definitions only.
     **/
    const CodeType_ReturnFeatureDefinitions = 'ReturnFeatureDefinitions';

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
     * @return CategoryFeatureDetailLevelCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param CategoryFeatureDetailLevelCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isReturnAll()
    {
        return $this->_value === self::CodeType_ReturnAll;
    }

    /**
     * @return bool
     */
    public function isReturnFeatureDefinitions()
    {
        return $this->_value === self::CodeType_ReturnFeatureDefinitions;
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

CategoryFeatureDetailLevelCodeType::_register();
