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
 * This enumerated type consists of each Unpaid Item case state.
 **/
class UnpaidItemStatusTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'UnpaidItemStatusTypeCodeType';
    const NAME = 'UnpaidItemStatusTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that the seller's request for a Final Value Fee credit has been denied.
     **/
    const CodeType_FinalValueFeeDenied = 'FinalValueFeeDenied';

    /**
     * This enumeration value indicates that the Final Value Fee has been credited back to the seller's account.
     **/
    const CodeType_FinalValueFeeCredited = 'FinalValueFeeCredited';

    /**
     * This enumeration value indicates that the seller is eligible to received a Final Value Fee credit back to the
     * their account.
     **/
    const CodeType_FinalValueFeeEligible = 'FinalValueFeeEligible';

    /**
     * This enumeration value indicates that the Unpaid Item case is currently waiting for a response from the seller.
     **/
    const CodeType_AwaitingSellerResponse = 'AwaitingSellerResponse';

    /**
     * This enumeration value indicates that the Unpaid Item case is currently waiting for a response from the buyer.
     **/
    const CodeType_AwaitingBuyerResponse = 'AwaitingBuyerResponse';

    /**
     * This enumeration value indicates that the Unpaid Item case has been opened by the seller against the buyer.
     **/
    const CodeType_UnpaidItemFiled = 'UnpaidItemFiled';

    /**
     * This enumeration value indicates that the seller is eligible to create an Unpaid Item case against the buyer.
     **/
    const CodeType_UnpaidItemEligible = 'UnpaidItemEligible';

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
     * @return UnpaidItemStatusTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param UnpaidItemStatusTypeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isFinalValueFeeDenied()
    {
        return $this->_value === self::CodeType_FinalValueFeeDenied;
    }

    /**
     * @return bool
     */
    public function isFinalValueFeeCredited()
    {
        return $this->_value === self::CodeType_FinalValueFeeCredited;
    }

    /**
     * @return bool
     */
    public function isFinalValueFeeEligible()
    {
        return $this->_value === self::CodeType_FinalValueFeeEligible;
    }

    /**
     * @return bool
     */
    public function isAwaitingSellerResponse()
    {
        return $this->_value === self::CodeType_AwaitingSellerResponse;
    }

    /**
     * @return bool
     */
    public function isAwaitingBuyerResponse()
    {
        return $this->_value === self::CodeType_AwaitingBuyerResponse;
    }

    /**
     * @return bool
     */
    public function isUnpaidItemFiled()
    {
        return $this->_value === self::CodeType_UnpaidItemFiled;
    }

    /**
     * @return bool
     */
    public function isUnpaidItemEligible()
    {
        return $this->_value === self::CodeType_UnpaidItemEligible;
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

UnpaidItemStatusTypeCodeType::_register();
