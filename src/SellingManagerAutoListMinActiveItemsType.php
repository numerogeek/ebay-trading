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
 * Defines the options available for an automated listing rule that
 * keeps a minimum number of items on the site.
 **/
class SellingManagerAutoListMinActiveItemsType extends EbatNs_ComplexType
{
    const TAG = 'SellingManagerAutoListMinActiveItemsType';
    const NAME = 'SellingManagerAutoListMinActiveItemsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $MinActiveItemCount = null;

    /**
     * @var string|null
     */
    protected $ListTimeFrom = null;

    /**
     * @var string|null
     */
    protected $ListTimeTo = null;

    /**
     * @var int|null
     */
    protected $SpacingIntervalInMinutes = null;

    /**
     * @var int|null
     */
    protected $ListingHoldInventoryLevel = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMinActiveItemCount()
    {
        return $this->_dc($this->MinActiveItemCount, 'MinActiveItemCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMinActiveItemCount($value)
    {
        $this->MinActiveItemCount = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListTimeFrom()
    {
        return $this->_dc($this->ListTimeFrom, 'ListTimeFrom');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setListTimeFrom($value)
    {
        $this->ListTimeFrom = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListTimeTo()
    {
        return $this->_dc($this->ListTimeTo, 'ListTimeTo');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setListTimeTo($value)
    {
        $this->ListTimeTo = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSpacingIntervalInMinutes()
    {
        return $this->_dc($this->SpacingIntervalInMinutes, 'SpacingIntervalInMinutes');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setSpacingIntervalInMinutes($value)
    {
        $this->SpacingIntervalInMinutes = self::_int($value);
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
            'MinActiveItemCount' => ['type' => 'int'],
            'ListTimeFrom' => [],
            'ListTimeTo' => [],
            'SpacingIntervalInMinutes' => ['type' => 'int'],
            'ListingHoldInventoryLevel' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellingManagerAutoListMinActiveItemsType::_register();
