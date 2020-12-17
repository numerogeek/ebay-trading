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
 * Indicates whether the seller is eligible for a Final Value Fee credit if the
 * dispute is resolved by the buyer and seller, or if eBay customer support makes a
 * decision on the dispute in the seller's favor. Note that even if the item is
 * eligible for a Final Value Fee credit, the credit is not guaranteed in any way.
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
class DisputeCreditEligibilityCodeType extends EbatNs_EnumType
{
    const TAG = 'DisputeCreditEligibilityCodeType';
    const NAME = 'DisputeCreditEligibilityCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * The seller is not currently eligible for a Final Value Fee credit.
     **/
    const CodeType_InEligible = 'InEligible';

    /**
     * The seller is eligible for a Final Value Fee credit.
     **/
    const CodeType_Eligible = 'Eligible';

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
     * @return DisputeCreditEligibilityCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param DisputeCreditEligibilityCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isInEligible()
    {
        return $this->_value === self::CodeType_InEligible;
    }

    /**
     * @return bool
     */
    public function isEligible()
    {
        return $this->_value === self::CodeType_Eligible;
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

DisputeCreditEligibilityCodeType::_register();
