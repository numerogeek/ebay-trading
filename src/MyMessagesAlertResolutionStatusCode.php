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
class MyMessagesAlertResolutionStatusCode extends EbatNs_EnumType
{
    const TAG = 'MyMessagesAlertResolutionStatusCode';
    const NAME = 'MyMessagesAlertResolutionStatusCode';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This field is deprecated.
     **/
    const CodeType_Unresolved = 'Unresolved';

    /**
     * This field is deprecated.
     **/
    const CodeType_ResolvedByAutoResolution = 'ResolvedByAutoResolution';

    /**
     * This field is deprecated.
     **/
    const CodeType_ResolvedByUser = 'ResolvedByUser';

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
     * @return MyMessagesAlertResolutionStatusCode|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param MyMessagesAlertResolutionStatusCode|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isUnresolved()
    {
        return $this->_value === self::CodeType_Unresolved;
    }

    /**
     * @return bool
     */
    public function isResolvedByAutoResolution()
    {
        return $this->_value === self::CodeType_ResolvedByAutoResolution;
    }

    /**
     * @return bool
     */
    public function isResolvedByUser()
    {
        return $this->_value === self::CodeType_ResolvedByUser;
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

MyMessagesAlertResolutionStatusCode::_register();
