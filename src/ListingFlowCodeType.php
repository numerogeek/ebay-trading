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
 * This enumerated type is deprecated.
 **/
class ListingFlowCodeType extends EbatNs_EnumType
{
    const TAG = 'ListingFlowCodeType';
    const NAME = 'ListingFlowCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is not used.
     **/
    const CodeType_AddItem = 'AddItem';

    /**
     * This value is not used.
     **/
    const CodeType_ReviseItem = 'ReviseItem';

    /**
     * This value is not used.
     **/
    const CodeType_RelistItem = 'RelistItem';

    /**
     * This value is not used.
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
     * @return ListingFlowCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ListingFlowCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isAddItem()
    {
        return $this->_value === self::CodeType_AddItem;
    }

    /**
     * @return bool
     */
    public function isReviseItem()
    {
        return $this->_value === self::CodeType_ReviseItem;
    }

    /**
     * @return bool
     */
    public function isRelistItem()
    {
        return $this->_value === self::CodeType_RelistItem;
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

ListingFlowCodeType::_register();
