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
 * Defines the options available for an automated
 * Second Chance Offer rule.
 **/
class SellingManagerAutoSecondChanceOfferType extends EbatNs_ComplexType
{
    const TAG = 'SellingManagerAutoSecondChanceOfferType';
    const NAME = 'SellingManagerAutoSecondChanceOfferType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SellingManagerAutoSecondChanceOfferTypeCodeType|null
     */
    protected $SecondChanceOfferCondition = null;

    /**
     * @var AmountType|null
     */
    protected $Amount = null;

    /**
     * @var float|null
     */
    protected $ProfitPercent = null;

    /**
     * @var SecondChanceOfferDurationCodeType|null
     */
    protected $Duration = null;

    /**
     * @var int|null
     */
    protected $ListingHoldInventoryLevel = null;


    /**
     * @return SellingManagerAutoSecondChanceOfferTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSecondChanceOfferCondition()
    {
        return $this->_dc($this->SecondChanceOfferCondition);
    }

    /**
     * @param SellingManagerAutoSecondChanceOfferTypeCodeType|null $value
     * @return void
     */
    public function setSecondChanceOfferCondition($value)
    {
        $this->SecondChanceOfferCondition = $this->_enum($value, SellingManagerAutoSecondChanceOfferTypeCodeType::class);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAmount()
    {
        return $this->_dc($this->Amount, 'Amount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setAmount($value)
    {
        $this->Amount = $value;
    }

    /**
     * @return float|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProfitPercent()
    {
        return $this->_dc($this->ProfitPercent, 'ProfitPercent');
    }

    /**
     * @param float|null $value
     * @return void
     */
    public function setProfitPercent($value)
    {
        $this->ProfitPercent = self::_float($value);
    }

    /**
     * @return SecondChanceOfferDurationCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDuration()
    {
        return $this->_dc($this->Duration);
    }

    /**
     * @param SecondChanceOfferDurationCodeType|null $value
     * @return void
     */
    public function setDuration($value)
    {
        $this->Duration = $this->_enum($value, SecondChanceOfferDurationCodeType::class);
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
            'SecondChanceOfferCondition' => ['type' => 'SellingManagerAutoSecondChanceOfferTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Amount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ProfitPercent' => ['type' => 'float'],
            'Duration' => ['type' => 'SecondChanceOfferDurationCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ListingHoldInventoryLevel' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellingManagerAutoSecondChanceOfferType::_register();
