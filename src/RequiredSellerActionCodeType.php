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
 * Enumerated type that defines the list of possible actions that a seller can
 * take to expedite the release of funds for an order into their account.
 **/
class RequiredSellerActionCodeType extends EbatNs_EnumType
{
    const TAG = 'RequiredSellerActionCodeType';
    const NAME = 'RequiredSellerActionCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that there is an open eBay Money Back Guarantee case
     * involving the seller and the item. The seller must address and get
     * the case resolved before the funds can be scheduled for release to the
     * seller's account. See the
     * <a
     * href="http://developer.ebay.com/Devzone/guides/features-guide/default.html#development/Post-Order.html">Resolving
     * Order Issues</a>
     * page for information about retrieving and managing eBay Money Back Guarantee cases.
     **/
    const CodeType_ResolveeBPCase = 'ResolveeBPCase';

    /**
     * This value indicates that the seller must mark the order line item as shipped to expedite
     * the release of funds into their account. The seller can use the
     * CompleteSale
     * call to mark an item as shipped. If an order line item is marked as shipped, it is possible
     * that the seller's funds for the order will be released as soon as seven days after the latest
     * estimated delivery date.
     **/
    const CodeType_MarkAsShipped = 'MarkAsShipped';

    /**
     * This value indicates that the seller should contact eBay Customer Support to discover
     * the next required action to expedite the release of funds into their account.
     **/
    const CodeType_ContacteBayCS = 'ContacteBayCS';

    /**
     * This value indicates that the seller must resolve the PayPal Buyer Protection case filed
     * against the order line item to expedite the release of funds into their account.
     **/
    const CodeType_ResolvePPPIcase = 'ResolvePPPIcase';

    /**
     * This value is no longer used.
     **/
    const CodeType_SetupPayoutMethod = 'SetupPayoutMethod';

    /**
     * This value is no longer used.
     **/
    const CodeType_UpdatePayoutMethod = 'UpdatePayoutMethod';

    /**
     * This value is no longer used.
     **/
    const CodeType_None = 'None';

    /**
     * This value indicates that the seller must provide the buyer the tracking information for
     * the order line item to expedite the release of funds into their account. The seller can
     * use the
     * CompleteSale
     * call to provide tracking information for an
     * order line item. If the tracking information for an order line item is provided, it is
     * possible that the seller's funds for the order will be released as soon as three days
     * after eBay has confirmed that the item has been delivered.
     **/
    const CodeType_UploadTrackingInfo = 'UploadTrackingInfo';

    /**
     * This value indicates that the buyer has not received the item, and the buyer has contacted
     * the seller through the eBay system in an effort to resolve the issue with the seller. The
     * seller must make it right with the buyer in order to expedite the release of funds into
     * their account.
     **/
    const CodeType_ResolveBuyerMessageInr = 'ResolveBuyerMessageInr';

    /**
     * This value indicates that the buyer has received the item, but the item is not as
     * described in the listing; hence, the buyer has contacted the seller through the eBay
     * system in an effort to resolve the issue with the seller. The seller must make it right
     * with the buyer in order to expedite the release of funds into their account.
     **/
    const CodeType_ResolveBuyerMessageSnad = 'ResolveBuyerMessageSnad';

    /**
     * This value is reserved for internal or future use.
     **/
    const CodeType_CustomCode = 'CustomCode';

    /**
     * This value indicates that the buyer is returning the item through eBay's managed return
     * process. Upon receiving the returned item from the buyer, the seller must issue a refund
     * to the buyer within five business days, and shortly after this happens, eBay will credit
     * the seller's account with the Final Value Fee that was originally assessed on the sale
     * of the item.
     **/
    const CodeType_ResolveReturn = 'ResolveReturn';
    
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
     * @return RequiredSellerActionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param RequiredSellerActionCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isResolveeBPCase()
    {
        return $this->_value === self::CodeType_ResolveeBPCase;
    }

    /**
     * @return bool
     */
    public function isMarkAsShipped()
    {
        return $this->_value === self::CodeType_MarkAsShipped;
    }

    /**
     * @return bool
     */
    public function isContacteBayCS()
    {
        return $this->_value === self::CodeType_ContacteBayCS;
    }

    /**
     * @return bool
     */
    public function isResolvePPPIcase()
    {
        return $this->_value === self::CodeType_ResolvePPPIcase;
    }

    /**
     * @return bool
     */
    public function isSetupPayoutMethod()
    {
        return $this->_value === self::CodeType_SetupPayoutMethod;
    }

    /**
     * @return bool
     */
    public function isUpdatePayoutMethod()
    {
        return $this->_value === self::CodeType_UpdatePayoutMethod;
    }

    /**
     * @return bool
     */
    public function isNone()
    {
        return $this->_value === self::CodeType_None;
    }

    /**
     * @return bool
     */
    public function isUploadTrackingInfo()
    {
        return $this->_value === self::CodeType_UploadTrackingInfo;
    }

    /**
     * @return bool
     */
    public function isResolveBuyerMessageInr()
    {
        return $this->_value === self::CodeType_ResolveBuyerMessageInr;
    }

    /**
     * @return bool
     */
    public function isResolveBuyerMessageSnad()
    {
        return $this->_value === self::CodeType_ResolveBuyerMessageSnad;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }

    /**
     * @return bool
     */
    public function isResolveReturn()
    {
        return $this->_value === self::CodeType_ResolveReturn;
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

RequiredSellerActionCodeType::_register();
