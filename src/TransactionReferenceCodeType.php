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
 * Enumerated type defining the possible values that can returned in the attribute of the
 * Payment.ReferenceID
 * and
 * Payment.PaymentReferenceID
 * field.
 **/
class TransactionReferenceCodeType extends EbatNs_EnumType
{
    const TAG = 'TransactionReferenceCodeType';
    const NAME = 'TransactionReferenceCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is the unique identifier of an external payment transaction.
     **/
    const CodeType_ExternalTransactionID = 'ExternalTransactionID';

    /**
     * No longer applicable as the eBay Now service is no longer available to buyers and sellers.
     **/
    const CodeType_MandateReferenceNumber = 'MandateReferenceNumber';

    /**
     * This value is reserved for future or internal use.
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
     * @return TransactionReferenceCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param TransactionReferenceCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isExternalTransactionID()
    {
        return $this->_value === self::CodeType_ExternalTransactionID;
    }

    /**
     * @return bool
     */
    public function isMandateReferenceNumber()
    {
        return $this->_value === self::CodeType_MandateReferenceNumber;
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

TransactionReferenceCodeType::_register();
