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
 * This type is used to provide contact hours for a seller of a Classified Ad listing, including motor vehicles.
 * There is also a boolean field in this type that indicates whether or not potential buyer can contact the seller
 * by email.
 **/
class ExtendedContactDetailsType extends EbatNs_ComplexType
{
    const TAG = 'ExtendedContactDetailsType';
    const NAME = 'ExtendedContactDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ContactHoursDetailsType|null
     */
    protected $ContactHoursDetails = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ClassifiedAdContactByEmailEnabled = null;

    /**
     * @var string|null
     */
    protected $PayPerLeadPhoneNumber = null;


    /**
     * @return ContactHoursDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getContactHoursDetails()
    {
        return $this->_dc($this->ContactHoursDetails, 'ContactHoursDetails');
    }

    /**
     * @param ContactHoursDetailsType|null $value
     * @return void
     */
    public function setContactHoursDetails($value)
    {
        $this->ContactHoursDetails = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClassifiedAdContactByEmailEnabled()
    {
        return $this->_dc($this->ClassifiedAdContactByEmailEnabled === 'true', 'ClassifiedAdContactByEmailEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setClassifiedAdContactByEmailEnabled($value)
    {
        $this->ClassifiedAdContactByEmailEnabled = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPayPerLeadPhoneNumber()
    {
        return $this->_dc($this->PayPerLeadPhoneNumber, 'PayPerLeadPhoneNumber');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPayPerLeadPhoneNumber($value)
    {
        $this->PayPerLeadPhoneNumber = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ContactHoursDetails' => ['type' => 'ContactHoursDetailsType', 'xmlns' => self::XMLNS],
            'ClassifiedAdContactByEmailEnabled' => ['type' => 'bool'],
            'PayPerLeadPhoneNumber' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ExtendedContactDetailsType::_register();
