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
 * The base response of the
 * SetPromotionalSale
 * call. Contains the status of a promotional sale.
 **/
class SetPromotionalSaleResponseType extends EbatNs_Response
{
    const TAG = 'SetPromotionalSaleResponseType';
    const NAME = 'SetPromotionalSaleResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var PromotionalSaleStatusCodeType|null
     */
    protected $Status = null;

    /**
     * @var int|null
     */
    protected $PromotionalSaleID = null;


    /**
     * @return PromotionalSaleStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStatus()
    {
        return $this->_dc($this->Status);
    }

    /**
     * @param PromotionalSaleStatusCodeType|null $value
     * @return void
     */
    public function setStatus($value)
    {
        $this->Status = $this->_enum($value, PromotionalSaleStatusCodeType::class);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPromotionalSaleID()
    {
        return $this->_dc($this->PromotionalSaleID, 'PromotionalSaleID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPromotionalSaleID($value)
    {
        $this->PromotionalSaleID = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Status' => ['type' => 'PromotionalSaleStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PromotionalSaleID' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SetPromotionalSaleResponseType::_register();
