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
 * Enumerated type that lists the actions that eBay may take once a dispute is resolved.
 * 
 * <span class="tablenote"><strong>Note:</strong>
 * 'Item Not Received' or 'Significantly Not As Described' cases, initiated by buyers through the eBay Money
 * Back Guarantee program, are not returned with
 * GetUserDisputes
 * . The <a
 * href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a>
 * method of the <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a>
 * is used to retrieve Money Back Guarantee cases programmatically.
 * </span>
 **/
class DisputeResolutionRecordTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'DisputeResolutionRecordTypeCodeType';
    const NAME = 'DisputeResolutionRecordTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that the buyer received an Unpaid Item Strike.
     **/
    const CodeType_StrikeBuyer = 'StrikeBuyer';

    /**
     * This enumeration value indicates that the buyer's account has been suspended, and buyer will be unable to use the
     * eBay site.
     **/
    const CodeType_SuspendBuyer = 'SuspendBuyer';

    /**
     * This enumeration value indicates that the buyer's activity is restricted and will be unable to bid on or purchase
     * items.
     **/
    const CodeType_RestrictBuyer = 'RestrictBuyer';

    /**
     * This enumeration value indicates that the seller received a Final Value Fee credit.
     **/
    const CodeType_FVFCredit = 'FVFCredit';

    /**
     * This enumeration value indicates that the seller's listing fees were credited.
     **/
    const CodeType_InsertionFeeCredit = 'InsertionFeeCredit';

    /**
     * This enumeration value indicates that the buyer has appealed the Unpaid Item Strike against their account.
     **/
    const CodeType_AppealBuyerStrike = 'AppealBuyerStrike';

    /**
     * This enumeration value indicates that the buyer's account has been reinstated.
     **/
    const CodeType_UnsuspendBuyer = 'UnsuspendBuyer';

    /**
     * This enumeration value indicates that all restrictions on the buyer's account have ended.
     **/
    const CodeType_UnrestrictBuyer = 'UnrestrictBuyer';

    /**
     * This enumeration value indicates that the seller's Final Value Fee credit was reversed.
     **/
    const CodeType_ReverseFVFCredit = 'ReverseFVFCredit';

    /**
     * This enumeration value indicates that the seller's listing fees credit was reversed.
     **/
    const CodeType_ReverseInsertionFeeCredit = 'ReverseInsertionFeeCredit';

    /**
     * This enumeration value indicates that a customer service ticket to suspend The buyer's account has been created.
     **/
    const CodeType_GenerateCSTicketForSuspend = 'GenerateCSTicketForSuspend';

    /**
     * This enumeration value indicates that the seller requested, but did not receive a Final Value Fee credit.
     **/
    const CodeType_FVFCreditNotGranted = 'FVFCreditNotGranted';

    /**
     * This enumeration value indicates that the buyer did not receive the item, and filed a claim against the seller.
     **/
    const CodeType_ItemNotReceivedClaimFiled = 'ItemNotReceivedClaimFiled';

    /**
     * This enumeration value indicates that an Unpaid Item was automatically relisted by the Unpaid Item Assistant
     * mechanism.
     **/
    const CodeType_UnpaidItemRelisted = 'UnpaidItemRelisted';

    /**
     * This enumeration value indicates that an Unpaid Item was automatically revised by the Unpaid Item Assistant
     * mechanism.
     **/
    const CodeType_UnpaidItemRevised = 'UnpaidItemRevised';

    /**
     * Reserved for future use.
     **/
    const CodeType_FVFOnShippingCredit = 'FVFOnShippingCredit';

    /**
     * Reserved for future use.
     **/
    const CodeType_FVFOnShippingCreditNotGranted = 'FVFOnShippingCreditNotGranted';

    /**
     * Reserved for future use.
     **/
    const CodeType_ReverseFVFOnShippingCredit = 'ReverseFVFOnShippingCredit';

    /**
     * This enumeration value indicates that the seller received a credit for feature fees.
     **/
    const CodeType_FeatureFeeCredit = 'FeatureFeeCredit';

    /**
     * This enumeration value indicates that the seller did not receive a credit for feature fees.
     **/
    const CodeType_FeatureFeeNotCredit = 'FeatureFeeNotCredit';

    /**
     * This enumeration value indicates that the seller's feature fees credit was reversed.
     **/
    const CodeType_ReverseFeatureFeeCredit = 'ReverseFeatureFeeCredit';

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
     * @return DisputeResolutionRecordTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param DisputeResolutionRecordTypeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isStrikeBuyer()
    {
        return $this->_value === self::CodeType_StrikeBuyer;
    }

    /**
     * @return bool
     */
    public function isSuspendBuyer()
    {
        return $this->_value === self::CodeType_SuspendBuyer;
    }

    /**
     * @return bool
     */
    public function isRestrictBuyer()
    {
        return $this->_value === self::CodeType_RestrictBuyer;
    }

    /**
     * @return bool
     */
    public function isFVFCredit()
    {
        return $this->_value === self::CodeType_FVFCredit;
    }

    /**
     * @return bool
     */
    public function isInsertionFeeCredit()
    {
        return $this->_value === self::CodeType_InsertionFeeCredit;
    }

    /**
     * @return bool
     */
    public function isAppealBuyerStrike()
    {
        return $this->_value === self::CodeType_AppealBuyerStrike;
    }

    /**
     * @return bool
     */
    public function isUnsuspendBuyer()
    {
        return $this->_value === self::CodeType_UnsuspendBuyer;
    }

    /**
     * @return bool
     */
    public function isUnrestrictBuyer()
    {
        return $this->_value === self::CodeType_UnrestrictBuyer;
    }

    /**
     * @return bool
     */
    public function isReverseFVFCredit()
    {
        return $this->_value === self::CodeType_ReverseFVFCredit;
    }

    /**
     * @return bool
     */
    public function isReverseInsertionFeeCredit()
    {
        return $this->_value === self::CodeType_ReverseInsertionFeeCredit;
    }

    /**
     * @return bool
     */
    public function isGenerateCSTicketForSuspend()
    {
        return $this->_value === self::CodeType_GenerateCSTicketForSuspend;
    }

    /**
     * @return bool
     */
    public function isFVFCreditNotGranted()
    {
        return $this->_value === self::CodeType_FVFCreditNotGranted;
    }

    /**
     * @return bool
     */
    public function isItemNotReceivedClaimFiled()
    {
        return $this->_value === self::CodeType_ItemNotReceivedClaimFiled;
    }

    /**
     * @return bool
     */
    public function isUnpaidItemRelisted()
    {
        return $this->_value === self::CodeType_UnpaidItemRelisted;
    }

    /**
     * @return bool
     */
    public function isUnpaidItemRevised()
    {
        return $this->_value === self::CodeType_UnpaidItemRevised;
    }

    /**
     * @return bool
     */
    public function isFVFOnShippingCredit()
    {
        return $this->_value === self::CodeType_FVFOnShippingCredit;
    }

    /**
     * @return bool
     */
    public function isFVFOnShippingCreditNotGranted()
    {
        return $this->_value === self::CodeType_FVFOnShippingCreditNotGranted;
    }

    /**
     * @return bool
     */
    public function isReverseFVFOnShippingCredit()
    {
        return $this->_value === self::CodeType_ReverseFVFOnShippingCredit;
    }

    /**
     * @return bool
     */
    public function isFeatureFeeCredit()
    {
        return $this->_value === self::CodeType_FeatureFeeCredit;
    }

    /**
     * @return bool
     */
    public function isFeatureFeeNotCredit()
    {
        return $this->_value === self::CodeType_FeatureFeeNotCredit;
    }

    /**
     * @return bool
     */
    public function isReverseFeatureFeeCredit()
    {
        return $this->_value === self::CodeType_ReverseFeatureFeeCredit;
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

DisputeResolutionRecordTypeCodeType::_register();
