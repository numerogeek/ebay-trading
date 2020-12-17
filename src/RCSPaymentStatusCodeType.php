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
 * The status of a payment.
 **/
class RCSPaymentStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'RCSPaymentStatusCodeType';
    const NAME = 'RCSPaymentStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Order line item payment has been canceled.
     * (Reserved for future use.)
     **/
    const CodeType_Canceled = 'Canceled';

    /**
     * Order line item payment is completed.
     **/
    const CodeType_Paid = 'Paid';

    /**
     * Order line item is awaiting payment.
     **/
    const CodeType_Pending = 'Pending';

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
     * @return RCSPaymentStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param RCSPaymentStatusCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isCanceled()
    {
        return $this->_value === self::CodeType_Canceled;
    }

    /**
     * @return bool
     */
    public function isPaid()
    {
        return $this->_value === self::CodeType_Paid;
    }

    /**
     * @return bool
     */
    public function isPending()
    {
        return $this->_value === self::CodeType_Pending;
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

RCSPaymentStatusCodeType::_register();
