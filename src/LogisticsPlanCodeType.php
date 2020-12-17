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
 * This enumerated type is used by
 * OrderType
 * and
 * TransactionType
 * to indicate which logistics plan was selected by the buyer at the order or order line item level. Currently,
 * this type is only supporting the "Click and Collect" and digital gift card use cases, but more logistics plan
 * types may be added in the future.
 **/
class LogisticsPlanCodeType extends EbatNs_EnumType
{
    const TAG = 'LogisticsPlanCodeType';
    const NAME = 'LogisticsPlanCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the buyer has selected "Click and Collect" as the logistics plan. With the 'Click and
     * Collect' feature, a buyer can purchase certain items on eBay and collect them at a local store. Buyers are
     * notified by eBay once their items are available. The "Click and Collect" feature is only available to large
     * merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites.
     **/
    const CodeType_PickUpDropOff = 'PickUpDropOff';

    /**
     * This value indicates that the order or order line item is a digital gift card that will be delivered to the buyer
     * or the recipient of the gift card by email.
     **/
    const CodeType_DigitalDelivery = 'DigitalDelivery';

    /**
     * This value is reserved for internal or future use.
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
     * @return LogisticsPlanCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param LogisticsPlanCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isPickUpDropOff()
    {
        return $this->_value === self::CodeType_PickUpDropOff;
    }

    /**
     * @return bool
     */
    public function isDigitalDelivery()
    {
        return $this->_value === self::CodeType_DigitalDelivery;
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

LogisticsPlanCodeType::_register();
