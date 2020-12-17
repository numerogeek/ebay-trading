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
 * Contains information for scheduling limits for the user.
 **/
class SchedulingInfoType extends EbatNs_ComplexType
{
    const TAG = 'SchedulingInfoType';
    const NAME = 'SchedulingInfoType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $MaxScheduledMinutes = null;

    /**
     * @var int|null
     */
    protected $MinScheduledMinutes = null;

    /**
     * @var int|null
     */
    protected $MaxScheduledItems = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxScheduledMinutes()
    {
        return $this->_dc($this->MaxScheduledMinutes, 'MaxScheduledMinutes');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMaxScheduledMinutes($value)
    {
        $this->MaxScheduledMinutes = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMinScheduledMinutes()
    {
        return $this->_dc($this->MinScheduledMinutes, 'MinScheduledMinutes');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMinScheduledMinutes($value)
    {
        $this->MinScheduledMinutes = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxScheduledItems()
    {
        return $this->_dc($this->MaxScheduledItems, 'MaxScheduledItems');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMaxScheduledItems($value)
    {
        $this->MaxScheduledItems = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'MaxScheduledMinutes' => ['type' => 'int'],
            'MinScheduledMinutes' => ['type' => 'int'],
            'MaxScheduledItems' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SchedulingInfoType::_register();
