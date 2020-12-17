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
 * This type is used by the <strong>PromotionalSaleDetails</strong> container returned in the
 * <strong>GetPromotionalSaleDetails</strong> call. The <strong>PromotionalSaleDetails</strong> container consists
 * of one or promotional sales that match the input criteria.
 * 
 * Promotional Sales are only available to eBay sellers who are eBay Store subscribers.
 **/
class PromotionalSaleArrayType extends EbatNs_ComplexType
{
    const TAG = 'PromotionalSaleArrayType';
    const NAME = 'PromotionalSaleArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var PromotionalSaleType[]|null
     */
    protected $PromotionalSale = [];


    /**
     * @return PromotionalSaleType[]|PromotionalSaleType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getPromotionalSale($index = null)
    {
        return $this->_dc($index === null
            ? $this->PromotionalSale
            : (count($this->PromotionalSale) > $index
                ? $this->PromotionalSale[$index]
                : null), 'PromotionalSale');
    }

    /**
     * @param PromotionalSaleType|null|PromotionalSaleType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setPromotionalSale($value, $index = null)
    {
        if ($index === null) {
            $this->PromotionalSale = $value;
        } else {
            $this->PromotionalSale[$index] = [];
            
            foreach ($value as $item) {
                $this->addPromotionalSale($item);
            }
        }
    }

    /**
     * @param PromotionalSaleType|null $value
     * @return void
     */
    public function addPromotionalSale($value)
    {
        $this->PromotionalSale[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['PromotionalSale' => ['type' => 'PromotionalSaleType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

PromotionalSaleArrayType::_register();
