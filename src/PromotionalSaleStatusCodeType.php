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
 * Values indicate the status of a sale. Used for the Promotional Price Display
 * feature, which enables sellers to apply discounts across many listings.
 **/
class PromotionalSaleStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'PromotionalSaleStatusCodeType';
    const NAME = 'PromotionalSaleStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * The promotional sale is active.
     **/
    const CodeType_Active = 'Active';

    /**
     * The promotional sale is scheduled. That is, the start time is in the future.
     **/
    const CodeType_Scheduled = 'Scheduled';

    /**
     * The status of the promotional sale is pending. When first scheduling a Sale,
     * if you select over 200 listings to be in any given Sale, it will take some
     * time for eBay to process the request.
     **/
    const CodeType_Processing = 'Processing';

    /**
     * The promotional sale is inactive, the sale has ended. You can reschedule a
     * sale once it has ended, but you will need to wait at least 24 hours before it
     * can become active.
     **/
    const CodeType_Inactive = 'Inactive';

    /**
     * The promotional sale has been deleted. Deleted promotional sales cannot be
     * updated or reactivated.
     **/
    const CodeType_Deleted = 'Deleted';

    /**
     * Reserved for internal or future use.
     **/
    const CodeType_CustomCode = 'CustomCode';
    
    /**
     * @var string|null
     */
    protected $_value = null;


    /**
     * @param string|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return PromotionalSaleStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PromotionalSaleStatusCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->_value === self::CodeType_Active;
    }

    /**
     * @return bool
     */
    public function isScheduled()
    {
        return $this->_value === self::CodeType_Scheduled;
    }

    /**
     * @return bool
     */
    public function isProcessing()
    {
        return $this->_value === self::CodeType_Processing;
    }

    /**
     * @return bool
     */
    public function isInactive()
    {
        return $this->_value === self::CodeType_Inactive;
    }

    /**
     * @return bool
     */
    public function isDeleted()
    {
        return $this->_value === self::CodeType_Deleted;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

PromotionalSaleStatusCodeType::_register();
