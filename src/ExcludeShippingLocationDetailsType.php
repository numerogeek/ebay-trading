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
 * Type used by the
 * ExcludeShippingLocationDetails
 * containers that are returned in the
 * GeteBayDetails
 * response. The values returned in the
 * ExcludeShippingLocationDetails.Location
 * fields are the values that can be specified when specifying excluded shipping locations in an Add/Revise/Relist
 * item call, or in a shipping business policy.
 **/
class ExcludeShippingLocationDetailsType extends EbatNs_ComplexType
{
    const TAG = 'ExcludeShippingLocationDetailsType';
    const NAME = 'ExcludeShippingLocationDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Description = null;

    /**
     * @var string|null
     */
    protected $Location = null;

    /**
     * @var string|null
     */
    protected $Region = null;

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
    public function getLocation()
    {
        return $this->_dc($this->Location, 'Location');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setLocation($value)
    {
        $this->Location = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRegion()
    {
        return $this->_dc($this->Region, 'Region');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRegion($value)
    {
        $this->Region = self::_string($value);
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
            'Description' => [],
            'Location' => [],
            'Region' => [],
            'DetailVersion' => [],
            'UpdateTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ExcludeShippingLocationDetailsType::_register();
