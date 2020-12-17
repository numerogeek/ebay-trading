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
 * Set of available layouts for items listed in an eBay Store.
 **/
class StoreItemListLayoutCodeType extends EbatNs_EnumType
{
    const TAG = 'StoreItemListLayoutCodeType';
    const NAME = 'StoreItemListLayoutCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Displays item list as a single column, with smaller item pictures.
     **/
    const CodeType_ListView = 'ListView';

    /**
     * Displays item list in two columns, with larger item pictures.
     **/
    const CodeType_GalleryView = 'GalleryView';

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
     * @return StoreItemListLayoutCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param StoreItemListLayoutCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isListView()
    {
        return $this->_value === self::CodeType_ListView;
    }

    /**
     * @return bool
     */
    public function isGalleryView()
    {
        return $this->_value === self::CodeType_GalleryView;
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

StoreItemListLayoutCodeType::_register();
