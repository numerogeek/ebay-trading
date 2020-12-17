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
 * Enumerated type that defines the possible statuses of an order dispute between buyer and seller. The
 * DisputeState
 * and
 * DisputeStatus
 * values returned for each dispute complement one another.
 * 
 * If the
 * DisputeSortType
 * filter is used in a
 * GetUserDisputes
 * call and set to <code>DisputeStatusAscending</code>, retrieved disputes will be sorted in the following order
 * according to
 * DisputeStatus
 * :
 * <ol>
 * <li><code>WaitingForSellerResponse</code></li>
 * <li><code>WaitingForBuyerResponse</code></li>
 * <li><code>ClosedFVFCreditStrike</code></li>
 * <li><code>ClosedNoFVFCreditStrike</code></li>
 * <li><code>ClosedFVFCreditNoStrike</code></li>
 * <li><code>ClosedNoFVFCreditNoStrike</code></li>
 * <li><code>Closed</code></li>
 * <li><code>StrikeAppealedAfterClosing</code></li>
 * <li><code>FVFCreditReversedAfterClosing</code></li>
 * <li><code>StrikeAppealedAndFVFCreditReversed</code></li>
 * </ol>
 * If the
 * DisputeSortType
 * value is set to  <code>DisputeStatusDescending</code> instead, retrieved disputes will be sorted in the opposite
 * order of the ones listed above.
 * 
 * <span class="tablenote"><strong>Note:</strong>
 * 'Item Not Received' or 'Significantly Not As Described' cases, initiated by buyers through the eBay Money
 * Back Guarantee program, are not returned with
 * GetDispute
 * or
 * GetUserDisputes
 * . The <a
 * href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a>
 * method of the <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a>
 * is used to retrieve Money Back Guarantee cases programmatically.
 * </span>
 **/
class DisputeStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'DisputeStatusCodeType';
    const NAME = 'DisputeStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that the dispute is closed.
     **/
    const CodeType_Closed = 'Closed';

    /**
     * This enumeration value indicates that the dispute is waiting for the seller's response.
     **/
    const CodeType_WaitingForSellerResponse = 'WaitingForSellerResponse';

    /**
     * This enumeration value indicates that the dispute is waiting for the buyer's response.
     **/
    const CodeType_WaitingForBuyerResponse = 'WaitingForBuyerResponse';

    /**
     * This enumeration value indicates that the Unpaid Item dispute is closed, the seller received a Final Value Fee
     * credit, and the buyer received a strike.
     **/
    const CodeType_ClosedFVFCreditStrike = 'ClosedFVFCreditStrike';

    /**
     * This enumeration value indicates that the Unpaid Item dispute is closed, the seller did not receive a Final Value
     * Fee credit, and the buyer received a strike.
     **/
    const CodeType_ClosedNoFVFCreditStrike = 'ClosedNoFVFCreditStrike';

    /**
     * This enumeration value indicates that the Unpaid Item dispute is closed, the seller received a Final Value Fee
     * credit, and the buyer did not receive a strike.
     **/
    const CodeType_ClosedFVFCreditNoStrike = 'ClosedFVFCreditNoStrike';

    /**
     * This enumeration value indicates that the Unpaid Item dispute is closed, the seller did not receive a Final Value
     * Fee credit, and the buyer did not receive a strike.
     **/
    const CodeType_ClosedNoFVFCreditNoStrike = 'ClosedNoFVFCreditNoStrike';

    /**
     * This enumeration value indicates that the Unpaid Item dispute was closed with a buyer's strike, but the buyer has
     * appealed that strike.
     **/
    const CodeType_StrikeAppealedAfterClosing = 'StrikeAppealedAfterClosing';

    /**
     * This enumeration value indicates that the seller's Final Value Fee credit was reversed after the Unpaid Item
     * dispute was closed.
     **/
    const CodeType_FVFCreditReversedAfterClosing = 'FVFCreditReversedAfterClosing';

    /**
     * This enumeration value indicates that the seller's Final Value Fee credit was reversed and the buyer's strike was
     * appealed after the Unpaid Item dispute was closed.
     **/
    const CodeType_StrikeAppealedAndFVFCreditReversed = 'StrikeAppealedAndFVFCreditReversed';

    /**
     * This enumeration value indicates that the claim was assigned to an adjuster.
     **/
    const CodeType_ClaimOpened = 'ClaimOpened';

    /**
     * This enumeration value indicates that the buyer was contacted by eBay and asked to submit paperwork.
     **/
    const CodeType_NoDocumentation = 'NoDocumentation';

    /**
     * This enumeration value indicates that the claim was closed due to the buyer not responding to verification or due
     * to missing paperwork.
     **/
    const CodeType_ClaimClosed = 'ClaimClosed';

    /**
     * This enumeration value indicates that the claim was denied.
     **/
    const CodeType_ClaimDenied = 'ClaimDenied';

    /**
     * This enumeration value indicates that paperwork was received for the claim, and the claim is being investigated.
     **/
    const CodeType_ClaimInProcess = 'ClaimInProcess';

    /**
     * This enumeration value indicates that the claim was approved for reimbursement, and sent to accounts payable for
     * payment.
     **/
    const CodeType_ClaimApproved = 'ClaimApproved';

    /**
     * This enumeration value indicates that the claim was paid.
     **/
    const CodeType_ClaimPaid = 'ClaimPaid';

    /**
     * This enumeration value indicates that the buyer's dispute against the seller was resolved, due to the seller
     * sending the item or refunding the buyer.
     **/
    const CodeType_ClaimResolved = 'ClaimResolved';

    /**
     * This enumeration value indicates that the claim was submitted via Web.
     **/
    const CodeType_ClaimSubmitted = 'ClaimSubmitted';

    /**
     * This enumeration value indicates that an Unpaid Item dispute was opened by the seller against the buyer.
     **/
    const CodeType_UnpaidItemOpened = 'UnpaidItemOpened';

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
     * @return DisputeStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param DisputeStatusCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isClosed()
    {
        return $this->_value === self::CodeType_Closed;
    }

    /**
     * @return bool
     */
    public function isWaitingForSellerResponse()
    {
        return $this->_value === self::CodeType_WaitingForSellerResponse;
    }

    /**
     * @return bool
     */
    public function isWaitingForBuyerResponse()
    {
        return $this->_value === self::CodeType_WaitingForBuyerResponse;
    }

    /**
     * @return bool
     */
    public function isClosedFVFCreditStrike()
    {
        return $this->_value === self::CodeType_ClosedFVFCreditStrike;
    }

    /**
     * @return bool
     */
    public function isClosedNoFVFCreditStrike()
    {
        return $this->_value === self::CodeType_ClosedNoFVFCreditStrike;
    }

    /**
     * @return bool
     */
    public function isClosedFVFCreditNoStrike()
    {
        return $this->_value === self::CodeType_ClosedFVFCreditNoStrike;
    }

    /**
     * @return bool
     */
    public function isClosedNoFVFCreditNoStrike()
    {
        return $this->_value === self::CodeType_ClosedNoFVFCreditNoStrike;
    }

    /**
     * @return bool
     */
    public function isStrikeAppealedAfterClosing()
    {
        return $this->_value === self::CodeType_StrikeAppealedAfterClosing;
    }

    /**
     * @return bool
     */
    public function isFVFCreditReversedAfterClosing()
    {
        return $this->_value === self::CodeType_FVFCreditReversedAfterClosing;
    }

    /**
     * @return bool
     */
    public function isStrikeAppealedAndFVFCreditReversed()
    {
        return $this->_value === self::CodeType_StrikeAppealedAndFVFCreditReversed;
    }

    /**
     * @return bool
     */
    public function isClaimOpened()
    {
        return $this->_value === self::CodeType_ClaimOpened;
    }

    /**
     * @return bool
     */
    public function isNoDocumentation()
    {
        return $this->_value === self::CodeType_NoDocumentation;
    }

    /**
     * @return bool
     */
    public function isClaimClosed()
    {
        return $this->_value === self::CodeType_ClaimClosed;
    }

    /**
     * @return bool
     */
    public function isClaimDenied()
    {
        return $this->_value === self::CodeType_ClaimDenied;
    }

    /**
     * @return bool
     */
    public function isClaimInProcess()
    {
        return $this->_value === self::CodeType_ClaimInProcess;
    }

    /**
     * @return bool
     */
    public function isClaimApproved()
    {
        return $this->_value === self::CodeType_ClaimApproved;
    }

    /**
     * @return bool
     */
    public function isClaimPaid()
    {
        return $this->_value === self::CodeType_ClaimPaid;
    }

    /**
     * @return bool
     */
    public function isClaimResolved()
    {
        return $this->_value === self::CodeType_ClaimResolved;
    }

    /**
     * @return bool
     */
    public function isClaimSubmitted()
    {
        return $this->_value === self::CodeType_ClaimSubmitted;
    }

    /**
     * @return bool
     */
    public function isUnpaidItemOpened()
    {
        return $this->_value === self::CodeType_UnpaidItemOpened;
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

DisputeStatusCodeType::_register();
