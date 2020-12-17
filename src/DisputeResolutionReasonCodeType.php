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
 * This enumerated type defines the possible reasons why an order dispute between a buyer and seller is resolved.
 * 
 * <span class="tablenote"><strong>Note:</strong>
 * The dispute calls in the Trading API are not compatible with 'Item Not Received' or 'Significantly Not As
 * Described' cases initiated by buyers through the eBay Money Back Guarantee program. The <a
 * href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to
 * retrieve and/or respond to eBay Money Back Guarantee cases programmatically.
 * </span>
 **/
class DisputeResolutionReasonCodeType extends EbatNs_EnumType
{
    const TAG = 'DisputeResolutionReasonCodeType';
    const NAME = 'DisputeResolutionReasonCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that the dispute has not been resolved.
     **/
    const CodeType_Unresolved = 'Unresolved';

    /**
     * This enumeration value indicates that the buyer was able to provide proof of payment for an Unpaid Item case.
     **/
    const CodeType_ProofOfPayment = 'ProofOfPayment';

    /**
     * This enumeration value indicates that the buyer or seller had a technical problem with a computer.
     **/
    const CodeType_ComputerTechnicalProblem = 'ComputerTechnicalProblem';

    /**
     * This enumeration value indicates that the buyer and seller have not made any contact with one another.
     **/
    const CodeType_NoContact = 'NoContact';

    /**
     * This enumeration value indicates that the buyer or seller had a family emergency.
     **/
    const CodeType_FamilyEmergency = 'FamilyEmergency';

    /**
     * This enumeration value indicates that the buyer was able to provide proof of payment for an Unpaid Item case
     * through the Feedback system.
     **/
    const CodeType_ProofGivenInFeedback = 'ProofGivenInFeedback';

    /**
     * This enumeration value indicates that the dispute was the buyer's first infraction, and thus resolved.
     **/
    const CodeType_FirstInfraction = 'FirstInfraction';

    /**
     * This enumeration value indicates that the buyer and seller came to an agreement.
     **/
    const CodeType_CameToAgreement = 'CameToAgreement';

    /**
     * This enumeration value indicates that the buyer successfully returned the item, and thus an Unpaid Item case was
     * closed.
     **/
    const CodeType_ItemReturned = 'ItemReturned';

    /**
     * This enumeration value indicates that the buyer reimbursed the seller's listing fees.
     **/
    const CodeType_BuyerPaidAuctionFees = 'BuyerPaidAuctionFees';

    /**
     * This enumeration value indicates that the seller received payment for the item, and thus an Unpaid Item case was
     * closed.
     **/
    const CodeType_SellerReceivedPayment = 'SellerReceivedPayment';

    /**
     * This enumeration value indicates that an undefined resolution occurred.
     **/
    const CodeType_OtherResolution = 'OtherResolution';

    /**
     * This enumeration value indicates that the claim was paid.
     **/
    const CodeType_ClaimPaid = 'ClaimPaid';

    /**
     * Reserved for future use.
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
     * @return DisputeResolutionReasonCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param DisputeResolutionReasonCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isUnresolved()
    {
        return $this->_value === self::CodeType_Unresolved;
    }

    /**
     * @return bool
     */
    public function isProofOfPayment()
    {
        return $this->_value === self::CodeType_ProofOfPayment;
    }

    /**
     * @return bool
     */
    public function isComputerTechnicalProblem()
    {
        return $this->_value === self::CodeType_ComputerTechnicalProblem;
    }

    /**
     * @return bool
     */
    public function isNoContact()
    {
        return $this->_value === self::CodeType_NoContact;
    }

    /**
     * @return bool
     */
    public function isFamilyEmergency()
    {
        return $this->_value === self::CodeType_FamilyEmergency;
    }

    /**
     * @return bool
     */
    public function isProofGivenInFeedback()
    {
        return $this->_value === self::CodeType_ProofGivenInFeedback;
    }

    /**
     * @return bool
     */
    public function isFirstInfraction()
    {
        return $this->_value === self::CodeType_FirstInfraction;
    }

    /**
     * @return bool
     */
    public function isCameToAgreement()
    {
        return $this->_value === self::CodeType_CameToAgreement;
    }

    /**
     * @return bool
     */
    public function isItemReturned()
    {
        return $this->_value === self::CodeType_ItemReturned;
    }

    /**
     * @return bool
     */
    public function isBuyerPaidAuctionFees()
    {
        return $this->_value === self::CodeType_BuyerPaidAuctionFees;
    }

    /**
     * @return bool
     */
    public function isSellerReceivedPayment()
    {
        return $this->_value === self::CodeType_SellerReceivedPayment;
    }

    /**
     * @return bool
     */
    public function isOtherResolution()
    {
        return $this->_value === self::CodeType_OtherResolution;
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

DisputeResolutionReasonCodeType::_register();
