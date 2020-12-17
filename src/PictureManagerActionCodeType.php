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
class PictureManagerActionCodeType extends EbatNs_EnumType
{
    const TAG = 'PictureManagerActionCodeType';
    const NAME = 'PictureManagerActionCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is not used.
     **/
    const CodeType_Add = 'Add';

    /**
     * This value is not used.
     **/
    const CodeType_Delete = 'Delete';

    /**
     * This value is not used.
     **/
    const CodeType_Rename = 'Rename';

    /**
     * This value is not used.
     **/
    const CodeType_Move = 'Move';

    /**
     * This value is not used.
     **/
    const CodeType_Change = 'Change';

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
     * @return PictureManagerActionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PictureManagerActionCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isAdd()
    {
        return $this->_value === self::CodeType_Add;
    }

    /**
     * @return bool
     */
    public function isDelete()
    {
        return $this->_value === self::CodeType_Delete;
    }

    /**
     * @return bool
     */
    public function isRename()
    {
        return $this->_value === self::CodeType_Rename;
    }

    /**
     * @return bool
     */
    public function isMove()
    {
        return $this->_value === self::CodeType_Move;
    }

    /**
     * @return bool
     */
    public function isChange()
    {
        return $this->_value === self::CodeType_Change;
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

PictureManagerActionCodeType::_register();
