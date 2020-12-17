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
 * This enumerated type identifies the possible values that can be returned in the
 * Ack
 * field in call responses. The
 * Ack
 * value  will indicate if the call was completely successful, if the called failed, or if the call was partially
 * successful, but with minor errors or warnings.
 **/
class AckCodeType extends EbatNs_EnumType
{
    const TAG = 'AckCodeType';
    const NAME = 'AckCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the call request was processed successfully without any issues.
     **/
    const CodeType_Success = 'Success';

    /**
     * This value indicates that the call request processing failed.
     **/
    const CodeType_Failure = 'Failure';

    /**
     * This value indicates that the call request was successful, but processing was not without any issues. These
     * issues can be checked in the
     * Errors
     * container, that will also be returned when one or more known issues occur with the call request.
     **/
    const CodeType_Warning = 'Warning';

    /**
     * This value indicates that the call request partially failed. One or more  issues that may be responsible for this
     * partial failure can be checked in the
     * Errors
     * container, that will also be returned when one or more known issues occur with the call request.
     **/
    const CodeType_PartialFailure = 'PartialFailure';

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
     * @return AckCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param AckCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isSuccess()
    {
        return $this->_value === self::CodeType_Success;
    }

    /**
     * @return bool
     */
    public function isFailure()
    {
        return $this->_value === self::CodeType_Failure;
    }

    /**
     * @return bool
     */
    public function isWarning()
    {
        return $this->_value === self::CodeType_Warning;
    }

    /**
     * @return bool
     */
    public function isPartialFailure()
    {
        return $this->_value === self::CodeType_PartialFailure;
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

AckCodeType::_register();
