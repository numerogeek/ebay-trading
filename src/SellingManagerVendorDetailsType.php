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
 * Describes vendor information.
 **/
class SellingManagerVendorDetailsType extends EbatNs_ComplexType
{
    const TAG = 'SellingManagerVendorDetailsType';
    const NAME = 'SellingManagerVendorDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $VendorName = null;

    /**
     * @var string|null
     */
    protected $VendorContactInfo = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVendorName()
    {
        return $this->_dc($this->VendorName, 'VendorName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setVendorName($value)
    {
        $this->VendorName = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVendorContactInfo()
    {
        return $this->_dc($this->VendorContactInfo, 'VendorContactInfo');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setVendorContactInfo($value)
    {
        $this->VendorContactInfo = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'VendorName' => [],
            'VendorContactInfo' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellingManagerVendorDetailsType::_register();
