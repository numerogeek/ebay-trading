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
 * Enumeration type that specifies the dispute filters that can be used in the
 * 
 * DisputeFilterType
 * field of the
 * GetUserDisputes
 * call.
 * 
 * <span class="tablenote"><strong>Note:</strong>
 * 'Item Not Received' or 'Significantly Not As Described' cases, initiated by buyers through the eBay Money
 * Back Guarantee program, are not returned with
 * GetUserDisputes
 * , regardless of what filter value is used. The <a
 * href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a>
 * method of the <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a>
 * is used to retrieve Money Back Guarantee cases programmatically.
 * </span>
 **/
class DisputeFilterTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'DisputeFilterTypeCodeType';
    const NAME = 'DisputeFilterTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * If used, this filter returns all open and closed disputes that involve the caller as a buyer
     * or seller.
     **/
    const CodeType_AllInvolvedDisputes = 'AllInvolvedDisputes';

    /**
     * If used, this filter returns all open disputes that involve the caller as a buyer
     * or seller and are awaiting a response from the caller. This is the default
     * DisputeFilterType
     * value. In other words, if no
     * DisputeFilterType
     * is specified in the request, only those disputes where the caller's response is due are returned.
     **/
    const CodeType_DisputesAwaitingMyResponse = 'DisputesAwaitingMyResponse';

    /**
     * If used, this filter returns all open disputes that involve the caller as a buyer or seller and
     * are awaiting a response from the other party.
     **/
    const CodeType_DisputesAwaitingOtherPartyResponse = 'DisputesAwaitingOtherPartyResponse';

    /**
     * If used, this filter returns all closed disputes that involve the caller as a buyer
     * or seller.
     **/
    const CodeType_AllInvolvedClosedDisputes = 'AllInvolvedClosedDisputes';

    /**
     * If used, this filter returns all disputes that involve the caller as a buyer
     * or seller and are eligible for a Final Value Fee credit, regardless of
     * whether or not the credit has been granted.
     **/
    const CodeType_EligibleForCredit = 'EligibleForCredit';

    /**
     * If used, this filter returns all open and closed <i>Unpaid Item</i> disputes that
     * involve the caller as a buyer or seller.
     **/
    const CodeType_UnpaidItemDisputes = 'UnpaidItemDisputes';

    /**
     * If used, this filter returns all open and closed <i>Item Not Received</i> disputes that involve the caller as a
     * buyer or seller.
     * 
     * <span class="tablenote"><strong>Note:</strong>
     * This filter is only used to retrieve any 'Item Not Received' or 'Significantly Not As Described' disputes
     * that a buyer initiated through their PayPal account. As noted above, the
     * GetUserDisputes
     * call will not return any eBay Money Back Guarantee cases.
     * </span>
     **/
    const CodeType_ItemNotReceivedDisputes = 'ItemNotReceivedDisputes';

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
     * @return DisputeFilterTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param DisputeFilterTypeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isAllInvolvedDisputes()
    {
        return $this->_value === self::CodeType_AllInvolvedDisputes;
    }

    /**
     * @return bool
     */
    public function isDisputesAwaitingMyResponse()
    {
        return $this->_value === self::CodeType_DisputesAwaitingMyResponse;
    }

    /**
     * @return bool
     */
    public function isDisputesAwaitingOtherPartyResponse()
    {
        return $this->_value === self::CodeType_DisputesAwaitingOtherPartyResponse;
    }

    /**
     * @return bool
     */
    public function isAllInvolvedClosedDisputes()
    {
        return $this->_value === self::CodeType_AllInvolvedClosedDisputes;
    }

    /**
     * @return bool
     */
    public function isEligibleForCredit()
    {
        return $this->_value === self::CodeType_EligibleForCredit;
    }

    /**
     * @return bool
     */
    public function isUnpaidItemDisputes()
    {
        return $this->_value === self::CodeType_UnpaidItemDisputes;
    }

    /**
     * @return bool
     */
    public function isItemNotReceivedDisputes()
    {
        return $this->_value === self::CodeType_ItemNotReceivedDisputes;
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

DisputeFilterTypeCodeType::_register();
