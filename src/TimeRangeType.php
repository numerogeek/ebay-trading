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
 * Specifies the Date range.
 **/
class TimeRangeType extends EbatNs_ComplexType
{
    const TAG = 'TimeRangeType';
    const NAME = 'TimeRangeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $TimeFrom = null;

    /**
     * @var string|null
     */
    protected $TimeTo = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTimeFrom()
    {
        return $this->_dc($this->TimeFrom, 'TimeFrom');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTimeFrom($value)
    {
        $this->TimeFrom = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTimeTo()
    {
        return $this->_dc($this->TimeTo, 'TimeTo');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTimeTo($value)
    {
        $this->TimeTo = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'TimeFrom' => [],
            'TimeTo' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

TimeRangeType::_register();
