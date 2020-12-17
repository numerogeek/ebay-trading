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
 * This enumerated type contains the possible refund, exchange, or store credit options that a
 * seller may offer a buyer when the buyer wants to return the item.
 **/
class RefundOptionsCodeType extends EbatNs_EnumType
{
    const TAG = 'RefundOptionsCodeType';
    const NAME = 'RefundOptionsCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the seller will refund the buyer the cost of the item, excluding shipping and handling
     * costs and any restocking fee (US only).
     * 
     * The seller should use the
     * ReturnPolicy.Description
     * field in the Add API call to explain how the refund will be handled (such as whether the refund will occur via
     * PayPal).
     **/
    const CodeType_MoneyBack = 'MoneyBack';

    /**
     * <span class="tablenote">
     * Note:
     * This value is deprecated on the US site, and all listings attempting to use this
     * value will be blocked.
     * </span>
     * This value indicates that the seller will exchange the returned item for another item.
     * The seller should use the
     * ReturnPolicy.Description
     * field in the Add API call to explain how this will occur (such as whether the seller will send an identical item
     * in place of the returned item).
     **/
    const CodeType_Exchange = 'Exchange';

    /**
     * <span class="tablenote">
     * Note:
     * This value is deprecated on the US site, and all listings attempting to use this value are blocked.
     * </span>
     * The seller will give the buyer a credit toward the purchase of another item. The seller should use the
     * ReturnPolicy.Description
     * field in the Add API call to explain how the buyer can redeem this credit.
     **/
    const CodeType_MerchandiseCredit = 'MerchandiseCredit';

    /**
     * <span class="tablenote">
     * Note:
     * This value has been deprecated and US sellers that are willing to refund buyers or offer an identical
     * replacement item should use the <code>MoneyBackOrReplacement</code> value instead.
     * </span>
     * This value indicates that the seller will refund the buyer the cost of the item, excluding shipping and
     * handling costs and any restocking fee (US only), or the seller will exchange the returned item for another
     * identical item.
     * 
     * The seller should use the
     * ReturnPolicy.Description
     * field in the Add API call to explain how the refund will be handled, such as whether the refund will occur via
     * PayPal, or how the exchange will occur, such as whether the seller will send an identical item in place of the
     * returned item.
     **/
    const CodeType_MoneyBackOrExchange = 'MoneyBackOrExchange';

    /**
     * <span class="tablenote">
     * Note:
     * This value is only available on the US site. US sellers should use this value if they are willing to refund
     * buyers or offer an identical replacement item.
     * </span>
     * This value indicates that the seller will refund the buyer the cost of the item (excluding shipping and
     * handling costs and any restocking fee) through eBay returns, or the seller will replace the returned item with
     * another identical item.
     * 
     * The seller should use the
     * ReturnPolicy.Description
     * field in the Add API call to explain to buyer that are refunds and replacements will be handled through the eBay
     * returns process.
     **/
    const CodeType_MoneyBackOrReplacement = 'MoneyBackOrReplacement';

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
     * @return RefundOptionsCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param RefundOptionsCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isMoneyBack()
    {
        return $this->_value === self::CodeType_MoneyBack;
    }

    /**
     * @return bool
     */
    public function isExchange()
    {
        return $this->_value === self::CodeType_Exchange;
    }

    /**
     * @return bool
     */
    public function isMerchandiseCredit()
    {
        return $this->_value === self::CodeType_MerchandiseCredit;
    }

    /**
     * @return bool
     */
    public function isMoneyBackOrExchange()
    {
        return $this->_value === self::CodeType_MoneyBackOrExchange;
    }

    /**
     * @return bool
     */
    public function isMoneyBackOrReplacement()
    {
        return $this->_value === self::CodeType_MoneyBackOrReplacement;
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

RefundOptionsCodeType::_register();
