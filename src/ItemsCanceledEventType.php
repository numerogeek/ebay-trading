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
class ItemsCanceledEventType extends EbatNs_Response
{
    const TAG = 'ItemsCanceledEventType';
    const NAME = 'ItemsCanceledEventType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ItemIDArrayType|null
     */
    protected $CanceledItemIDArray = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $EligibleForRelist = null;

    /**
     * @var UserIDType|null
     */
    protected $SellerID = null;


    /**
     * @return ItemIDArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCanceledItemIDArray()
    {
        return $this->_dc($this->CanceledItemIDArray, 'CanceledItemIDArray');
    }

    /**
     * @param ItemIDArrayType|null $value
     * @return void
     */
    public function setCanceledItemIDArray($value)
    {
        $this->CanceledItemIDArray = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEligibleForRelist()
    {
        return $this->_dc($this->EligibleForRelist === 'true', 'EligibleForRelist');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEligibleForRelist($value)
    {
        $this->EligibleForRelist = self::_bool($value);
    }

    /**
     * @return UserIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerID()
    {
        return $this->_dc($this->SellerID, 'SellerID');
    }

    /**
     * @param UserIDType|null $value
     * @return void
     */
    public function setSellerID($value)
    {
        $this->SellerID = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CanceledItemIDArray' => ['type' => 'ItemIDArrayType', 'xmlns' => self::XMLNS],
            'EligibleForRelist' => ['type' => 'bool'],
            'SellerID' => ['type' => 'UserIDType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ItemsCanceledEventType::_register();
