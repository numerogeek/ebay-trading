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
 * This enum defines the different options that are available for specifying the available return durations. This is
 * the amount of time the seller gives the buyer for initiating a return once they receive the item.
 **/
class ReturnsDurationCodeType extends EbatNs_EnumType
{
    const TAG = 'ReturnsDurationCodeType';
    const NAME = 'ReturnsDurationCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * <code>Days_14</code> indicates the buyer has 14 days to initiate a return.
     **/
    const CodeType_Days_14 = 'Days_14';

    /**
     * <code>Days_30</code> indicates the buyer has 30 days to initiate a return.
     **/
    const CodeType_Days_30 = 'Days_30';

    /**
     * <code>Days_60</code> indicates the buyer has 60 days to initiate a return.
     **/
    const CodeType_Days_60 = 'Days_60';
    
    /**
     * @var string|null
     */
    protected $_value = null;


    /**
     * @param string|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return ReturnsDurationCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ReturnsDurationCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isDays_14()
    {
        return $this->_value === self::CodeType_Days_14;
    }

    /**
     * @return bool
     */
    public function isDays_30()
    {
        return $this->_value === self::CodeType_Days_30;
    }

    /**
     * @return bool
     */
    public function isDays_60()
    {
        return $this->_value === self::CodeType_Days_60;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

ReturnsDurationCodeType::_register();
