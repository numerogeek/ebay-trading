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
 * This enumerated type contains the possible values that can be returned in the
 * type
 * attribute of the
 * AddressAttribute
 * field. Currently, this type only contains one enumeration value, but in the future, other address attributes may
 * be created for this type.
 **/
class AddressAttributeCodeType extends EbatNs_EnumType
{
    const TAG = 'AddressAttributeCodeType';
    const NAME = 'AddressAttributeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the value returned in the
     * AddressAttribute
     * field is the reference ID for a "Click and Collect" order.
     **/
    const CodeType_ReferenceNumber = 'ReferenceNumber';

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
     * @return AddressAttributeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param AddressAttributeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isReferenceNumber()
    {
        return $this->_value === self::CodeType_ReferenceNumber;
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

AddressAttributeCodeType::_register();
