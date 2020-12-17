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
 * Specifies the type of link in the custom listing header.
 **/
class StoreCustomListingHeaderLinkCodeType extends EbatNs_EnumType
{
    const TAG = 'StoreCustomListingHeaderLinkCodeType';
    const NAME = 'StoreCustomListingHeaderLinkCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * No type.
     **/
    const CodeType_None = 'None';

    /**
     * Link is to an About Me page.
     **/
    const CodeType_AboutMePage = 'AboutMePage';

    /**
     * Link is to a custom page.
     **/
    const CodeType_CustomPage = 'CustomPage';

    /**
     * Link is to a custom category.
     **/
    const CodeType_CustomCategory = 'CustomCategory';

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
     * @return StoreCustomListingHeaderLinkCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param StoreCustomListingHeaderLinkCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isNone()
    {
        return $this->_value === self::CodeType_None;
    }

    /**
     * @return bool
     */
    public function isAboutMePage()
    {
        return $this->_value === self::CodeType_AboutMePage;
    }

    /**
     * @return bool
     */
    public function isCustomPage()
    {
        return $this->_value === self::CodeType_CustomPage;
    }

    /**
     * @return bool
     */
    public function isCustomCategory()
    {
        return $this->_value === self::CodeType_CustomCategory;
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

StoreCustomListingHeaderLinkCodeType::_register();
