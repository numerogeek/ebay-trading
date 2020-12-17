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
 * Provides information about the visibility level you've earned for your eBay listings.
 * When you have a better search standing, your listings may receive higher
 * placement in Best Match search results.
 **/
class SearchStandingDashboardType extends EbatNs_ComplexType
{
    const TAG = 'SearchStandingDashboardType';
    const NAME = 'SearchStandingDashboardType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SearchStandingStatusCodeType|null
     */
    protected $Status = null;


    /**
     * @return SearchStandingStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStatus()
    {
        return $this->_dc($this->Status);
    }

    /**
     * @param SearchStandingStatusCodeType|null $value
     * @return void
     */
    public function setStatus($value)
    {
        $this->Status = $this->_enum($value, SearchStandingStatusCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Status' => ['type' => 'SearchStandingStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

SearchStandingDashboardType::_register();
