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
class MailOptionsTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'MailOptionsTypeCodeType';
    const NAME = 'MailOptionsTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This field is deprecated.
     **/
    const CodeType_DoNotSendEmail = 'DoNotSendEmail';

    /**
     * This field is deprecated.
     **/
    const CodeType_EmailCopyToSender = 'EmailCopyToSender';

    /**
     * This field is deprecated.
     **/
    const CodeType_HideSenderEmailAddress = 'HideSenderEmailAddress';

    /**
     * This field is deprecated.
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
     * @return MailOptionsTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param MailOptionsTypeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isDoNotSendEmail()
    {
        return $this->_value === self::CodeType_DoNotSendEmail;
    }

    /**
     * @return bool
     */
    public function isEmailCopyToSender()
    {
        return $this->_value === self::CodeType_EmailCopyToSender;
    }

    /**
     * @return bool
     */
    public function isHideSenderEmailAddress()
    {
        return $this->_value === self::CodeType_HideSenderEmailAddress;
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

MailOptionsTypeCodeType::_register();
