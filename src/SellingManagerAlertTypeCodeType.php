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
 * This enumerated type defines the types of alerts that may me returned in the
 * GetSellingManagerAlerts
 * response
 **/
class SellingManagerAlertTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'SellingManagerAlertTypeCodeType';
    const NAME = 'SellingManagerAlertTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that the alert is related to a sales transaction. See the corresponding
     * Alert.SoldAlert
     * value for more information on the alert.
     **/
    const CodeType_Sold = 'Sold';

    /**
     * This enumeration value indicates that the alert is related to the seller's inventory. See the corresponding
     * Alert.InventoryAlert
     * value for more information on the alert.
     **/
    const CodeType_Inventory = 'Inventory';

    /**
     * This enumeration value indicates that the alert is related to an Selling Manager automation alert. See the
     * corresponding
     * Alert.AutomationAlert
     * value for more information on the alert.
     **/
    const CodeType_Automation = 'Automation';

    /**
     * This enumeration value is no longer applicable, so should not get returned.
     **/
    const CodeType_PaisaPay = 'PaisaPay';

    /**
     * This enumeration value indicates that the alert is related to either one of the following: negative feedback
     * received; a bad email template, or an unpaid item dispute requires attention. See the corresponding
     * Alert.GeneralAlert
     * value for more information on the alert.
     **/
    const CodeType_General = 'General';

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
     * @return SellingManagerAlertTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SellingManagerAlertTypeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isSold()
    {
        return $this->_value === self::CodeType_Sold;
    }

    /**
     * @return bool
     */
    public function isInventory()
    {
        return $this->_value === self::CodeType_Inventory;
    }

    /**
     * @return bool
     */
    public function isAutomation()
    {
        return $this->_value === self::CodeType_Automation;
    }

    /**
     * @return bool
     */
    public function isPaisaPay()
    {
        return $this->_value === self::CodeType_PaisaPay;
    }

    /**
     * @return bool
     */
    public function isGeneral()
    {
        return $this->_value === self::CodeType_General;
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

SellingManagerAlertTypeCodeType::_register();
