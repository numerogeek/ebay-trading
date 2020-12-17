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
 * Provides information about an automated relisting rule.
 * Automated relisting rules cannot be combined with automated listing rules.
 * A template can have one set of information per automated relisting rule specified.
 **/
class SellingManagerAutoRelistType extends EbatNs_ComplexType
{
    const TAG = 'SellingManagerAutoRelistType';
    const NAME = 'SellingManagerAutoRelistType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SellingManagerAutoRelistTypeCodeType|null
     */
    protected $Type = null;

    /**
     * @var SellingManagerAutoRelistOptionCodeType|null
     */
    protected $RelistCondition = null;

    /**
     * @var int|null
     */
    protected $RelistAfterDays = null;

    /**
     * @var int|null
     */
    protected $RelistAfterHours = null;

    /**
     * @var string|null
     */
    protected $RelistAtSpecificTimeOfDay = null;

    /**
     * @var BestOfferDetailsType|null
     */
    protected $BestOfferDetails = null;

    /**
     * @var int|null
     */
    protected $ListingHoldInventoryLevel = null;


    /**
     * @return SellingManagerAutoRelistTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getType()
    {
        return $this->_dc($this->Type);
    }

    /**
     * @param SellingManagerAutoRelistTypeCodeType|null $value
     * @return void
     */
    public function setType($value)
    {
        $this->Type = $this->_enum($value, SellingManagerAutoRelistTypeCodeType::class);
    }

    /**
     * @return SellingManagerAutoRelistOptionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRelistCondition()
    {
        return $this->_dc($this->RelistCondition);
    }

    /**
     * @param SellingManagerAutoRelistOptionCodeType|null $value
     * @return void
     */
    public function setRelistCondition($value)
    {
        $this->RelistCondition = $this->_enum($value, SellingManagerAutoRelistOptionCodeType::class);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRelistAfterDays()
    {
        return $this->_dc($this->RelistAfterDays, 'RelistAfterDays');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setRelistAfterDays($value)
    {
        $this->RelistAfterDays = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRelistAfterHours()
    {
        return $this->_dc($this->RelistAfterHours, 'RelistAfterHours');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setRelistAfterHours($value)
    {
        $this->RelistAfterHours = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRelistAtSpecificTimeOfDay()
    {
        return $this->_dc($this->RelistAtSpecificTimeOfDay, 'RelistAtSpecificTimeOfDay');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRelistAtSpecificTimeOfDay($value)
    {
        $this->RelistAtSpecificTimeOfDay = self::_string($value);
    }

    /**
     * @return BestOfferDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOfferDetails()
    {
        return $this->_dc($this->BestOfferDetails, 'BestOfferDetails');
    }

    /**
     * @param BestOfferDetailsType|null $value
     * @return void
     */
    public function setBestOfferDetails($value)
    {
        $this->BestOfferDetails = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingHoldInventoryLevel()
    {
        return $this->_dc($this->ListingHoldInventoryLevel, 'ListingHoldInventoryLevel');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setListingHoldInventoryLevel($value)
    {
        $this->ListingHoldInventoryLevel = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Type' => ['type' => 'SellingManagerAutoRelistTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'RelistCondition' => ['type' => 'SellingManagerAutoRelistOptionCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'RelistAfterDays' => ['type' => 'int'],
            'RelistAfterHours' => ['type' => 'int'],
            'RelistAtSpecificTimeOfDay' => [],
            'BestOfferDetails' => ['type' => 'BestOfferDetailsType', 'xmlns' => self::XMLNS],
            'ListingHoldInventoryLevel' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellingManagerAutoRelistType::_register();
