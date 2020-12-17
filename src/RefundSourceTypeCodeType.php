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
 * Enumerated type defining the refund types that a merchant can offer a buyer who is returning an In-Store Pickup
 * item to the store.
 **/
class RefundSourceTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'RefundSourceTypeCodeType';
    const NAME = 'RefundSourceTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the merchant issued a store credit to the buyer for the amount of the returned item(s).
     **/
    const CodeType_StoreCredit = 'StoreCredit';

    /**
     * This value indicates that the merchant issued a cash refund (or debit card/credit card reversal) to the buyer for
     * the amount of the returned item(s).
     **/
    const CodeType_PaymentRefund = 'PaymentRefund';

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
     * @return RefundSourceTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param RefundSourceTypeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isStoreCredit()
    {
        return $this->_value === self::CodeType_StoreCredit;
    }

    /**
     * @return bool
     */
    public function isPaymentRefund()
    {
        return $this->_value === self::CodeType_PaymentRefund;
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

RefundSourceTypeCodeType::_register();
