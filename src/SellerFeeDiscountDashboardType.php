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
 * PowerSeller discount information (e.g., to show in a Seller Dashboard). As a
 * PowerSeller, you can earn discounts on your monthly invoice Final Value Fees based
 * on how well you're doing as a seller.
 **/
class SellerFeeDiscountDashboardType extends EbatNs_ComplexType
{
    const TAG = 'SellerFeeDiscountDashboardType';
    const NAME = 'SellerFeeDiscountDashboardType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var float|null
     */
    protected $Percent = null;


    /**
     * @return float|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPercent()
    {
        return $this->_dc($this->Percent, 'Percent');
    }

    /**
     * @param float|null $value
     * @return void
     */
    public function setPercent($value)
    {
        $this->Percent = self::_float($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Percent' => ['type' => 'float']], parent::NAME);
        self::assignAttributes([]);
    }

}

SellerFeeDiscountDashboardType::_register();
