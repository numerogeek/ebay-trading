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
 * This enumerated type is a list of the systems used to deliver buyer/seller notifications.
 **/
class DeviceTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'DeviceTypeCodeType';
    const NAME = 'DeviceTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that buyer/seller notifications will be delivered through the Platform
     * Notifications system.
     **/
    const CodeType_Platform = 'Platform';

    /**
     * This enumeration value indicates that buyer/seller notifications will be delivered through the SMS system to a
     * wireless device.
     **/
    const CodeType_SMS = 'SMS';

    /**
     * This enumeration value indicates that buyer/seller notifications will be delivered through the Client Alerts
     * system.
     **/
    const CodeType_ClientAlerts = 'ClientAlerts';

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
     * @return DeviceTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param DeviceTypeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isPlatform()
    {
        return $this->_value === self::CodeType_Platform;
    }

    /**
     * @return bool
     */
    public function isSMS()
    {
        return $this->_value === self::CodeType_SMS;
    }

    /**
     * @return bool
     */
    public function isClientAlerts()
    {
        return $this->_value === self::CodeType_ClientAlerts;
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

DeviceTypeCodeType::_register();
