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
class LocalSearchType extends EbatNs_ComplexType
{
    const TAG = 'LocalSearchType';
    const NAME = 'LocalSearchType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $MaxDistance = null;

    /**
     * @var string|null
     */
    protected $PostalCode = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxDistance()
    {
        return $this->_dc($this->MaxDistance, 'MaxDistance');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMaxDistance($value)
    {
        $this->MaxDistance = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPostalCode()
    {
        return $this->_dc($this->PostalCode, 'PostalCode');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPostalCode($value)
    {
        $this->PostalCode = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'MaxDistance' => ['type' => 'int'],
            'PostalCode' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

LocalSearchType::_register();
