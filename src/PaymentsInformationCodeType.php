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
 * This type is deprecated.
 **/
class PaymentsInformationCodeType extends EbatNs_ComplexType
{
    const TAG = 'PaymentsInformationCodeType';
    const NAME = 'PaymentsInformationCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var PaymentInformationCodeType|null
     */
    protected $Payments = null;


    /**
     * @return PaymentInformationCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPayments()
    {
        return $this->_dc($this->Payments, 'Payments');
    }

    /**
     * @param PaymentInformationCodeType|null $value
     * @return void
     */
    public function setPayments($value)
    {
        $this->Payments = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Payments' => ['type' => 'PaymentInformationCodeType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

PaymentsInformationCodeType::_register();
