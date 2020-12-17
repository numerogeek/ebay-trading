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
 * <span class="tablenote">
 * Note:
 * While the Trading API continues to support item promotions for an eBay store owner, the Trading API will no
 * longer be enhanced with any new item promotion capabilities as they are developed by eBay. In addition, Promoted
 * Listings are also not supported by the Trading API. For these two reasons, it is recommended that
 * sellers/developers make plans to migrate to the
 * <a href="https://developer.ebay.com/api-docs/sell/marketing/overview.html">Marketing API</a>, which provides
 * all Promotions Manager and Promoted Listings capabilities, and this API will continue to be improved and enhanced
 * as more marketing features become available to sellers.
 * </span>
 * The base response type for the
 * GetPromotionalSaleDetails
 * call. This call retrieves information about promotional sales set up by an eBay store owner.
 **/
class GetPromotionalSaleDetailsResponseType extends EbatNs_Response
{
    const TAG = 'GetPromotionalSaleDetailsResponseType';
    const NAME = 'GetPromotionalSaleDetailsResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var PromotionalSaleArrayType|null
     */
    protected $PromotionalSaleDetails = null;


    /**
     * @return PromotionalSaleArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPromotionalSaleDetails()
    {
        return $this->_dc($this->PromotionalSaleDetails, 'PromotionalSaleDetails');
    }

    /**
     * @param PromotionalSaleArrayType|null $value
     * @return void
     */
    public function setPromotionalSaleDetails($value)
    {
        $this->PromotionalSaleDetails = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['PromotionalSaleDetails' => ['type' => 'PromotionalSaleArrayType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

GetPromotionalSaleDetailsResponseType::_register();
