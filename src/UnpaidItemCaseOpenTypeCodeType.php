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
 * Enumeration type that indicates the method used to open an Unpaid Item case.
 **/
class UnpaidItemCaseOpenTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'UnpaidItemCaseOpenTypeCodeType';
    const NAME = 'UnpaidItemCaseOpenTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the Unpaid Item case was opened automatically
     * through eBay's Unpaid Item Assistant feature.
     **/
    const CodeType_Auto = 'Auto';

    /**
     * This value indicates that the seller opened an Unpaid Item case manually
     * through the Resolution Center or by using the Trading API's
     * <strong>AddDispute</strong> call.
     **/
    const CodeType_Manual = 'Manual';

    /**
     * This value is reserved for future or internal use.
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
     * @return UnpaidItemCaseOpenTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param UnpaidItemCaseOpenTypeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isAuto()
    {
        return $this->_value === self::CodeType_Auto;
    }

    /**
     * @return bool
     */
    public function isManual()
    {
        return $this->_value === self::CodeType_Manual;
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

UnpaidItemCaseOpenTypeCodeType::_register();
