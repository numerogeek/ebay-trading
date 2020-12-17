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
 * This type is used by the
 * Program
 * container, which provides details on whether the order line item has passed or failed the authenticity
 * inspection.
 **/
class TransactionProgramType extends EbatNs_ComplexType
{
    const TAG = 'TransactionProgramType';
    const NAME = 'TransactionProgramType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AuthenticityVerificationType|null
     */
    protected $AuthenticityVerification = null;


    /**
     * @return AuthenticityVerificationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAuthenticityVerification()
    {
        return $this->_dc($this->AuthenticityVerification, 'AuthenticityVerification');
    }

    /**
     * @param AuthenticityVerificationType|null $value
     * @return void
     */
    public function setAuthenticityVerification($value)
    {
        $this->AuthenticityVerification = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['AuthenticityVerification' => ['type' => 'AuthenticityVerificationType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

TransactionProgramType::_register();
