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
 * Defines the action taken on a dispute with
 * AddDisputeResponse
 * . The value
 * you can use at a given time depends on the current value of
 * DisputeState
 * (see the <a
 * href="http://developer.ebay.com/DevZone/guides/features-guide/default.html#Development/UPI-Assistant.html">Unpaid
 * Item Assistant</a> for more information). Some values are for
 * <i>Unpaid Item</i> disputes and some are for <i>Item Not Received</i> disputes.
 * 
 * <span class="tablenote"><strong>Note:</strong>
 * The
 * AddDisputeResponse
 * call cannot be used to communicate about an 'Item Not Received' or 'Significantly Not As Described' case
 * initiated by a buyer through the eBay Money Back Guarantee program. The <a
 * href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to
 * respond to eBay Money Back Guarantee cases programmatically.
 * </span>
 **/
class DisputeActivityCodeType extends EbatNs_EnumType
{
    const TAG = 'DisputeActivityCodeType';
    const NAME = 'DisputeActivityCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * The seller wants to add a response to the dispute. For <i>Unpaid Item</i> disputes. The seller is limited to 25
     * responses.
     **/
    const CodeType_SellerAddInformation = 'SellerAddInformation';

    /**
     * The buyer has paid or the seller otherwise does not need to
     * pursue the dispute any longer. For <i>Unpaid Item</i> disputes.
     **/
    const CodeType_SellerCompletedTransaction = 'SellerCompletedTransaction';

    /**
     * The seller has made an agreement with the buyer and requires a
     * credit for a Final Value Fee already paid. For <i>Unpaid Item</i> disputes.
     **/
    const CodeType_CameToAgreementNeedFVFCredit = 'CameToAgreementNeedFVFCredit';

    /**
     * The seller wants to end communication or stop waiting for the
     * buyer. For <i>Unpaid Item</i> disputes.
     **/
    const CodeType_SellerEndCommunication = 'SellerEndCommunication';

    /**
     * The seller wants to end communication or stop waiting for the
     * buyer. Mutual agreement has been reached or the buyer has not
     * responded within four days. For <i>Unpaid Item</i> disputes.
     **/
    const CodeType_MutualAgreementOrNoBuyerResponse = 'MutualAgreementOrNoBuyerResponse';

    /**
     * The seller offers a full refund if the buyer did not receive
     * the item or a partial refund if the item is significantly not as
     * described. For <i>Item Not Received</i> and <i>Significantly Not As Described</i>
     * disputes.
     * 
     * This can be used when
     * DisputeState
     * is:
     * 
     * <code>NotReceivedNoSellerResponse</code>
     * <code>NotAsDescribedNoSellerResponse</code>
     * <code>NotReceivedMutualCommunication</code>
     * <code>NotAsDescribedMutualCommunication</code>
     **/
    const CodeType_SellerOffersRefund = 'SellerOffersRefund';

    /**
     * The seller has shipped the item or a replacement and provides
     * shipping information. For <i>Item Not Received</i> and <i>Significantly Not As Described</i> disputes.
     * 
     * This can be used when
     * DisputeState
     * is:
     * 
     * <code>NotReceivedNoSellerResponse</code>
     * <code>NotReceivedMutualCommunication</code>
     **/
    const CodeType_SellerShippedItem = 'SellerShippedItem';

    /**
     * The seller communicates with the buyer, offering a response or
     * comment. The seller is limited to 25 responses.
     * For <i>Item Not Received</i> and <i>Significantly Not As Described</i>
     * disputes.
     * 
     * This can be used when DisputeState is:
     * <code>NotReceivedNoSellerResponse</code>
     * <code>NotAsDescribedNoSellerResponse</code>
     * <code>NotReceivedMutualCommunication</code>
     * <code>NotAsDescribedMutualCommunication</code>
     **/
    const CodeType_SellerComment = 'SellerComment';

    /**
     * The buyer has not received an expected full or partial refund from the
     * seller in an <i>Item Not Received</i> and <i>Significantly Not As Described</i> buyer
     * dispute.
     * 
     * This can be used when
     * DisputeState
     * is:
     * <code>NotReceivedNoSellerResponse</code>
     * <code>NotReceivedMutualCommunication</code>
     **/
    const CodeType_SellerPaymentNotReceived = 'SellerPaymentNotReceived';

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
     * @return DisputeActivityCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param DisputeActivityCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isSellerAddInformation()
    {
        return $this->_value === self::CodeType_SellerAddInformation;
    }

    /**
     * @return bool
     */
    public function isSellerCompletedTransaction()
    {
        return $this->_value === self::CodeType_SellerCompletedTransaction;
    }

    /**
     * @return bool
     */
    public function isCameToAgreementNeedFVFCredit()
    {
        return $this->_value === self::CodeType_CameToAgreementNeedFVFCredit;
    }

    /**
     * @return bool
     */
    public function isSellerEndCommunication()
    {
        return $this->_value === self::CodeType_SellerEndCommunication;
    }

    /**
     * @return bool
     */
    public function isMutualAgreementOrNoBuyerResponse()
    {
        return $this->_value === self::CodeType_MutualAgreementOrNoBuyerResponse;
    }

    /**
     * @return bool
     */
    public function isSellerOffersRefund()
    {
        return $this->_value === self::CodeType_SellerOffersRefund;
    }

    /**
     * @return bool
     */
    public function isSellerShippedItem()
    {
        return $this->_value === self::CodeType_SellerShippedItem;
    }

    /**
     * @return bool
     */
    public function isSellerComment()
    {
        return $this->_value === self::CodeType_SellerComment;
    }

    /**
     * @return bool
     */
    public function isSellerPaymentNotReceived()
    {
        return $this->_value === self::CodeType_SellerPaymentNotReceived;
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

DisputeActivityCodeType::_register();
