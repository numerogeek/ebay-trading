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
 * <a href="https://developer.ebay.com/api-docs/sell/marketing/overview.html">Marketing API</a>, which provides all
 * Promotions Manager and Promoted Listings capabilities, and this API will continue to be improved and enhanced as
 * more marketing features become available to sellers.
 * </span>
 * The base request type for the
 * GetPromotionalSaleDetails
 * call. This call retrieves information about promotional sales set up by an eBay store owner. The eBay store
 * owner has the option to retrieve all promotional sales, a specific promotional sale, or promotional sales in a
 * specific state.
 **/
class GetPromotionalSaleDetailsRequestType extends AbstractRequestType
{
    const TAG = 'GetPromotionalSaleDetailsRequest';
    const NAME = 'GetPromotionalSaleDetailsRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetPromotionalSaleDetails';

    /**
     * @var int|null
     */
    protected $PromotionalSaleID = null;

    /**
     * @var PromotionalSaleStatusCodeType[]|null
     */
    protected $PromotionalSaleStatus = [];


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
     * @return string[]|PromotionalSaleStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getPromotionalSaleStatus($index = null)
    {
        return $this->_dc($index === null
            ? $this->PromotionalSaleStatus
            : (count($this->PromotionalSaleStatus) > $index
                ? $this->PromotionalSaleStatus[$index]
                : null));
    }

    /**
     * @param PromotionalSaleStatusCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setPromotionalSaleStatus($value, $index = null)
    {
        if ($index === null) {
            $this->PromotionalSaleStatus = $value;
        } else {
            $this->PromotionalSaleStatus[$index] = [];
            
            foreach ($value as $item) {
                $this->addPromotionalSaleStatus($item);
            }
        }
    }

    /**
     * @param PromotionalSaleStatusCodeType|null $value
     * @return void
     */
    public function addPromotionalSaleStatus($value)
    {
        $this->PromotionalSaleStatus[] = $this->_enum($value, PromotionalSaleStatusCodeType::class);
    }

    /**
     * @return GetPromotionalSaleDetailsResponseType|EbatNs_ResponseError
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
            'PromotionalSaleID' => ['type' => 'int'],
            'PromotionalSaleStatus' => ['type' => 'PromotionalSaleStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetPromotionalSaleDetailsRequestType::_register();
