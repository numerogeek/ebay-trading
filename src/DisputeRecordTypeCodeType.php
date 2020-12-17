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
 * Enumerated type that lists the different types of order disputes that can occur between buyer and seller.
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
class DisputeRecordTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'DisputeRecordTypeCodeType';
    const NAME = 'DisputeRecordTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that the dispute is an Unpaid Item case created by the seller against the buyer.
     * A seller should always try to resolve an Unpaid Item issue with the buyer before opening up a case with eBay.
     * Sometimes, just sending payment reminders to the buyer or messaging the buyer through the Messaging platform can
     * be helpful. The <a
     * href="https://www.ebay.com/help/selling/getting-paid/resolving-unpaid-items-buyers?id=4137">Resolving unpaid
     * items with buyers</a> help topic provides more details and tips on trying to work Unpaid Item issues out with the
     * buyer.
     **/
    const CodeType_UnpaidItem = 'UnpaidItem';

    /**
     * This enumeration value indicates that the dispute is an Item Not Received case created by the buyer against the
     * seller through PayPal's platform.
     * 
     * <span class="tablenote"><strong>Note:</strong>
     * As noted above, the
     * GetDispute
     * or
     * GetUserDisputes
     * calls will not return any eBay Money Back Guarantee cases.
     * </span>
     **/
    const CodeType_ItemNotReceived = 'ItemNotReceived';

    /**
     * This enumeration value is no longer applicable as the Half.com marketplace is shut down.
     **/
    const CodeType_HalfDispute = 'HalfDispute';

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
     * @return DisputeRecordTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param DisputeRecordTypeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isUnpaidItem()
    {
        return $this->_value === self::CodeType_UnpaidItem;
    }

    /**
     * @return bool
     */
    public function isItemNotReceived()
    {
        return $this->_value === self::CodeType_ItemNotReceived;
    }

    /**
     * @return bool
     */
    public function isHalfDispute()
    {
        return $this->_value === self::CodeType_HalfDispute;
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

DisputeRecordTypeCodeType::_register();
