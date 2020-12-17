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
 * Defines the options available for an Automated Listing Rule that
 * keeps a fixed number of items on the site
 **/
class SellingManagerAutoListAccordingToScheduleType extends EbatNs_ComplexType
{
    const TAG = 'SellingManagerAutoListAccordingToScheduleType';
    const NAME = 'SellingManagerAutoListAccordingToScheduleType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var DayOfWeekCodeType[]|null
     */
    protected $DayOfWeek = [];

    /**
     * @var int|null
     */
    protected $ListingPeriodInWeeks = null;

    /**
     * @var string|null
     */
    protected $ListAtSpecificTimeOfDay = null;

    /**
     * @var string|null
     */
    protected $StartTime = null;

    /**
     * @var string|null
     */
    protected $EndTime = null;

    /**
     * @var int|null
     */
    protected $MaxActiveItemCount = null;

    /**
     * @var int|null
     */
    protected $ListingHoldInventoryLevel = null;


    /**
     * @return string[]|DayOfWeekCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getDayOfWeek($index = null)
    {
        return $this->_dc($index === null
            ? $this->DayOfWeek
            : (count($this->DayOfWeek) > $index
                ? $this->DayOfWeek[$index]
                : null));
    }

    /**
     * @param DayOfWeekCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setDayOfWeek($value, $index = null)
    {
        if ($index === null) {
            $this->DayOfWeek = $value;
        } else {
            $this->DayOfWeek[$index] = [];
            
            foreach ($value as $item) {
                $this->addDayOfWeek($item);
            }
        }
    }

    /**
     * @param DayOfWeekCodeType|null $value
     * @return void
     */
    public function addDayOfWeek($value)
    {
        $this->DayOfWeek[] = $this->_enum($value, DayOfWeekCodeType::class);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingPeriodInWeeks()
    {
        return $this->_dc($this->ListingPeriodInWeeks, 'ListingPeriodInWeeks');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setListingPeriodInWeeks($value)
    {
        $this->ListingPeriodInWeeks = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListAtSpecificTimeOfDay()
    {
        return $this->_dc($this->ListAtSpecificTimeOfDay, 'ListAtSpecificTimeOfDay');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setListAtSpecificTimeOfDay($value)
    {
        $this->ListAtSpecificTimeOfDay = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStartTime()
    {
        return $this->_dc($this->StartTime, 'StartTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStartTime($value)
    {
        $this->StartTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEndTime()
    {
        return $this->_dc($this->EndTime, 'EndTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEndTime($value)
    {
        $this->EndTime = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxActiveItemCount()
    {
        return $this->_dc($this->MaxActiveItemCount, 'MaxActiveItemCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMaxActiveItemCount($value)
    {
        $this->MaxActiveItemCount = self::_int($value);
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
            'DayOfWeek' => ['type' => 'DayOfWeekCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ListingPeriodInWeeks' => ['type' => 'int'],
            'ListAtSpecificTimeOfDay' => [],
            'StartTime' => [],
            'EndTime' => [],
            'MaxActiveItemCount' => ['type' => 'int'],
            'ListingHoldInventoryLevel' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellingManagerAutoListAccordingToScheduleType::_register();
