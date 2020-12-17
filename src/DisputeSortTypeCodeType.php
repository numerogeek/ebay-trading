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
 * Enumerated type that defines the values that can be used in the
 * DisputeSortType
 * filter of the
 * GetUserDisputes
 * request to control the order of disputes that are returned.
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
class DisputeSortTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'DisputeSortTypeCodeType';
    const NAME = 'DisputeSortTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This is the default value. If this value is used in the
     * DisputeSortType
     * field, or if the
     * DisputeSortType
     * field is omitted from the
     * GetUserDisputes
     * request, retrieved disputes are sorted according to dispute creation time, in descending order.
     **/
    const CodeType_None = 'None';

    /**
     * If this value is used in the
     * DisputeSortType
     * field,  retrieved disputes are sorted according to dispute creation time, in ascending order.
     **/
    const CodeType_DisputeCreatedTimeAscending = 'DisputeCreatedTimeAscending';

    /**
     * If this value is used in the
     * DisputeSortType
     * field,  retrieved disputes are sorted according to dispute creation time, in descending order.
     **/
    const CodeType_DisputeCreatedTimeDescending = 'DisputeCreatedTimeDescending';

    /**
     * If this value is used in the
     * DisputeSortType
     * field,  retrieved disputes are sorted according to dispute status, in ascending order.
     **/
    const CodeType_DisputeStatusAscending = 'DisputeStatusAscending';

    /**
     * If this value is used in the
     * DisputeSortType
     * field,  retrieved disputes are sorted according to dispute status, in descending order.
     **/
    const CodeType_DisputeStatusDescending = 'DisputeStatusDescending';

    /**
     * If this value is used in the
     * DisputeSortType
     * field,  retrieved disputes are sorted according to whether the disputes are eligible for a Final Value Fee
     * credit to the seller, in ascending order. In other words, disputes ineligible for a FVF credit are listed before
     * disputes that are eligible for a FVF credit.
     **/
    const CodeType_DisputeCreditEligibilityAscending = 'DisputeCreditEligibilityAscending';

    /**
     * If this value is used in the
     * DisputeSortType
     * field,  retrieved disputes are sorted according to whether the disputes are eligible for a Final Value Fee
     * credit to the seller, in descending order. In other words, disputes eligible for a FVF credit are listed before
     * disputes that are not eligible for a FVF credit.
     **/
    const CodeType_DisputeCreditEligibilityDescending = 'DisputeCreditEligibilityDescending';

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
     * @return DisputeSortTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param DisputeSortTypeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
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
    public function isDisputeCreatedTimeAscending()
    {
        return $this->_value === self::CodeType_DisputeCreatedTimeAscending;
    }

    /**
     * @return bool
     */
    public function isDisputeCreatedTimeDescending()
    {
        return $this->_value === self::CodeType_DisputeCreatedTimeDescending;
    }

    /**
     * @return bool
     */
    public function isDisputeStatusAscending()
    {
        return $this->_value === self::CodeType_DisputeStatusAscending;
    }

    /**
     * @return bool
     */
    public function isDisputeStatusDescending()
    {
        return $this->_value === self::CodeType_DisputeStatusDescending;
    }

    /**
     * @return bool
     */
    public function isDisputeCreditEligibilityAscending()
    {
        return $this->_value === self::CodeType_DisputeCreditEligibilityAscending;
    }

    /**
     * @return bool
     */
    public function isDisputeCreditEligibilityDescending()
    {
        return $this->_value === self::CodeType_DisputeCreditEligibilityDescending;
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

DisputeSortTypeCodeType::_register();
