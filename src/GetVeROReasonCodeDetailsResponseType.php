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
 * Base response of the <strong>GetVeROReasonCodeDetails</strong> call. This response will consists of one or more
 * VeRO Program copyright/intellectual property infringement violation types.
 **/
class GetVeROReasonCodeDetailsResponseType extends EbatNs_Response
{
    const TAG = 'GetVeROReasonCodeDetailsResponseType';
    const NAME = 'GetVeROReasonCodeDetailsResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var VeROReasonCodeDetailsType|null
     */
    protected $VeROReasonCodeDetails = null;


    /**
     * @return VeROReasonCodeDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVeROReasonCodeDetails()
    {
        return $this->_dc($this->VeROReasonCodeDetails, 'VeROReasonCodeDetails');
    }

    /**
     * @param VeROReasonCodeDetailsType|null $value
     * @return void
     */
    public function setVeROReasonCodeDetails($value)
    {
        $this->VeROReasonCodeDetails = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['VeROReasonCodeDetails' => ['type' => 'VeROReasonCodeDetailsType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

GetVeROReasonCodeDetailsResponseType::_register();
