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
 * Enumerated type that defines Listing Designer template types.
 **/
class DescriptionTemplateCodeType extends EbatNs_EnumType
{
    const TAG = 'DescriptionTemplateCodeType';
    const NAME = 'DescriptionTemplateCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the Listing Designer template is a layout template that controls how pictures and
     * description text are
     * positioned on the View Item page.
     **/
    const CodeType_Layout = 'Layout';

    /**
     * This value indicates that the Listing Designer template is a theme template that determines which eBay-provided
     * theme (e.g. Valentine's Day) is to be applied for presenting pictures and description text.
     **/
    const CodeType_Theme = 'Theme';

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
     * @return DescriptionTemplateCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param DescriptionTemplateCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isLayout()
    {
        return $this->_value === self::CodeType_Layout;
    }

    /**
     * @return bool
     */
    public function isTheme()
    {
        return $this->_value === self::CodeType_Theme;
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

DescriptionTemplateCodeType::_register();
