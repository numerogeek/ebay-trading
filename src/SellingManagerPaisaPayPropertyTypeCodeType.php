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
 * Container for the PaisaPay alert types.
 **/
class SellingManagerPaisaPayPropertyTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'SellingManagerPaisaPayPropertyTypeCodeType';
    const NAME = 'SellingManagerPaisaPayPropertyTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * PaisaPay items awaiting shipment.
     **/
    const CodeType_PaisaPayAwaitingShipment = 'PaisaPayAwaitingShipment';

    /**
     * PaisaPay items for which time extension requests are rejected by the buyers.
     **/
    const CodeType_PaisaPayTimeExtensionRequestDeclined = 'PaisaPayTimeExtensionRequestDeclined';

    /**
     * PaisaPay items for which the item receipt has not yet been confirmed by the buyer or not
     * yet been auto-confirmed by the system.
     **/
    const CodeType_PaisaPayPendingReceived = 'PaisaPayPendingReceived';

    /**
     * PaisaPay items for which buyers have filed "Item not received".
     **/
    const CodeType_PaisaPayRefundInitiated = 'PaisaPayRefundInitiated';

    /**
     * PaisaPay items for which the seller has requested a time extension to enter the
     * shipping information.
     **/
    const CodeType_PaisaPayTimeExtensionRequested = 'PaisaPayTimeExtensionRequested';

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
     * @return SellingManagerPaisaPayPropertyTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SellingManagerPaisaPayPropertyTypeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isPaisaPayAwaitingShipment()
    {
        return $this->_value === self::CodeType_PaisaPayAwaitingShipment;
    }

    /**
     * @return bool
     */
    public function isPaisaPayTimeExtensionRequestDeclined()
    {
        return $this->_value === self::CodeType_PaisaPayTimeExtensionRequestDeclined;
    }

    /**
     * @return bool
     */
    public function isPaisaPayPendingReceived()
    {
        return $this->_value === self::CodeType_PaisaPayPendingReceived;
    }

    /**
     * @return bool
     */
    public function isPaisaPayRefundInitiated()
    {
        return $this->_value === self::CodeType_PaisaPayRefundInitiated;
    }

    /**
     * @return bool
     */
    public function isPaisaPayTimeExtensionRequested()
    {
        return $this->_value === self::CodeType_PaisaPayTimeExtensionRequested;
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

SellingManagerPaisaPayPropertyTypeCodeType::_register();
