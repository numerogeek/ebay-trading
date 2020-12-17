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
 * Container for other alerts for Selling Manager.
 **/
class SellingManagerGeneralPropertyTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'SellingManagerGeneralPropertyTypeCodeType';
    const NAME = 'SellingManagerGeneralPropertyTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Items that received negative feeback.
     **/
    const CodeType_NegativeFeedbackReceived = 'NegativeFeedbackReceived';

    /**
     * Unpaid item disputes require your response.
     **/
    const CodeType_UnpaidItemDispute = 'UnpaidItemDispute';

    /**
     * Emails not set because of HTML or active content.
     **/
    const CodeType_BadEmailTemplate = 'BadEmailTemplate';

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
     * @return SellingManagerGeneralPropertyTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SellingManagerGeneralPropertyTypeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isNegativeFeedbackReceived()
    {
        return $this->_value === self::CodeType_NegativeFeedbackReceived;
    }

    /**
     * @return bool
     */
    public function isUnpaidItemDispute()
    {
        return $this->_value === self::CodeType_UnpaidItemDispute;
    }

    /**
     * @return bool
     */
    public function isBadEmailTemplate()
    {
        return $this->_value === self::CodeType_BadEmailTemplate;
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

SellingManagerGeneralPropertyTypeCodeType::_register();
