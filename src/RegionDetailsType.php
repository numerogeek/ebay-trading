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
 * This type is no longer used; replaced by
 * ShippingLocationDetails
 * .
 **/
class RegionDetailsType extends EbatNs_ComplexType
{
    const TAG = 'RegionDetailsType';
    const NAME = 'RegionDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $RegionID = null;

    /**
     * @var string|null
     */
    protected $Description = null;

    /**
     * @var string|null
     */
    protected $DetailVersion = null;

    /**
     * @var string|null
     */
    protected $UpdateTime = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRegionID()
    {
        return $this->_dc($this->RegionID, 'RegionID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRegionID($value)
    {
        $this->RegionID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDescription()
    {
        return $this->_dc($this->Description, 'Description');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDescription($value)
    {
        $this->Description = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDetailVersion()
    {
        return $this->_dc($this->DetailVersion, 'DetailVersion');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDetailVersion($value)
    {
        $this->DetailVersion = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUpdateTime()
    {
        return $this->_dc($this->UpdateTime, 'UpdateTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUpdateTime($value)
    {
        $this->UpdateTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'RegionID' => [],
            'Description' => [],
            'DetailVersion' => [],
            'UpdateTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

RegionDetailsType::_register();
