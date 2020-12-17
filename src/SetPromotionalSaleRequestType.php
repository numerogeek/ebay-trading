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
 * Creates or modifies a promotional sale. Promotional sales enable sellers
 * to apply discounts and/or free shipping across many listings. To use this call, the seller must be a
 * registered eBay Store owner.
 **/
class SetPromotionalSaleRequestType extends AbstractRequestType
{
    const TAG = 'SetPromotionalSaleRequest';
    const NAME = 'SetPromotionalSaleRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'SetPromotionalSale';

    /**
     * @var ModifyActionCodeType|null
     */
    protected $Action = null;

    /**
     * @var PromotionalSaleType|null
     */
    protected $PromotionalSaleDetails = null;


    /**
     * @return ModifyActionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAction()
    {
        return $this->_dc($this->Action);
    }

    /**
     * @param ModifyActionCodeType|null $value
     * @return void
     */
    public function setAction($value)
    {
        $this->Action = $this->_enum($value, ModifyActionCodeType::class);
    }

    /**
     * @return PromotionalSaleType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPromotionalSaleDetails()
    {
        return $this->_dc($this->PromotionalSaleDetails, 'PromotionalSaleDetails');
    }

    /**
     * @param PromotionalSaleType|null $value
     * @return void
     */
    public function setPromotionalSaleDetails($value)
    {
        $this->PromotionalSaleDetails = $value;
    }

    /**
     * @return SetPromotionalSaleResponseType|EbatNs_ResponseError
     * @param EbatNs_Client
     **/
    function call($client)
    {
        return $client->call(self::REQUEST, $this);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Action' => ['type' => 'ModifyActionCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PromotionalSaleDetails' => ['type' => 'PromotionalSaleType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SetPromotionalSaleRequestType::_register();
