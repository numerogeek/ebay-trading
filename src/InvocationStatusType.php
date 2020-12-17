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

class InvocationStatusType extends EbatNs_EnumType
{
    const TAG = 'InvocationStatusType';
    const NAME = 'InvocationStatusType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    
    const CodeType_InProgress = 'InProgress';

    
    const CodeType_Success = 'Success';

    
    const CodeType_Failure = 'Failure';

    
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
     * @return InvocationStatusType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param InvocationStatusType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isInProgress()
    {
        return $this->_value === self::CodeType_InProgress;
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

InvocationStatusType::_register();
