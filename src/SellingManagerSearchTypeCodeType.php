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
 * Specifies search term types for Selling Manager listings.
 **/
class SellingManagerSearchTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'SellingManagerSearchTypeCodeType';
    const NAME = 'SellingManagerSearchTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Search for listings based on Buyer ID.
     **/
    const CodeType_BuyerUserID = 'BuyerUserID';

    /**
     * Search for listings based on Buyers email.
     **/
    const CodeType_BuyerEmail = 'BuyerEmail';

    /**
     * Search for listings based on Buyers full name.
     **/
    const CodeType_BuyerFullName = 'BuyerFullName';

    /**
     * Search for listings based on ItemID.
     **/
    const CodeType_ItemID = 'ItemID';

    /**
     * Search for listings based on Item Title.
     **/
    const CodeType_Title = 'Title';

    /**
     * Search for listings based on Product ID.
     **/
    const CodeType_ProductID = 'ProductID';

    /**
     * Search for listings based on Product Name.
     **/
    const CodeType_ProductName = 'ProductName';

    /**
     * Search for listings based on SKU.
     **/
    const CodeType_CustomLabel = 'CustomLabel';

    /**
     * Search for listings based on the sale record ID.
     * 
     * When an item is sold, Selling Manager generates a sale record.
     * A sale record contains buyer information, shipping, and other information.
     * A sale record is displayed in the Sold view in Selling Manager.
     * 
     * In the following calls,
     * the value for the sale record ID is in the
     * SellingManagerSalesRecordNumber
     * field:
     * 
     * GetItemTransactions
     * ,
     * GetSellerTransactions
     * ,
     * GetOrders
     * ,
     * GetOrderTransactions
     * .
     * In the Selling Manager calls, the value for the sale record ID is in the
     * 
     * SaleRecordID
     * field. The sale record ID can be for a single or multiple line item order.
     * 
     * For orders that occurred within the last 30 days, passing only the
     * SaleRecordID
     * into the
     * GetSellingManagerSoldListings
     * 
     * request will return the sale record. However, for sales that occurred more than 30 days ago, the
     * SaleDateRange
     * container
     * must also be used, passing in a date range that includes the date on which the specific sale occurred.
     **/
    const CodeType_SaleRecordID = 'SaleRecordID';

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
     * @return SellingManagerSearchTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SellingManagerSearchTypeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isBuyerUserID()
    {
        return $this->_value === self::CodeType_BuyerUserID;
    }

    /**
     * @return bool
     */
    public function isBuyerEmail()
    {
        return $this->_value === self::CodeType_BuyerEmail;
    }

    /**
     * @return bool
     */
    public function isBuyerFullName()
    {
        return $this->_value === self::CodeType_BuyerFullName;
    }

    /**
     * @return bool
     */
    public function isItemID()
    {
        return $this->_value === self::CodeType_ItemID;
    }

    /**
     * @return bool
     */
    public function isTitle()
    {
        return $this->_value === self::CodeType_Title;
    }

    /**
     * @return bool
     */
    public function isProductID()
    {
        return $this->_value === self::CodeType_ProductID;
    }

    /**
     * @return bool
     */
    public function isProductName()
    {
        return $this->_value === self::CodeType_ProductName;
    }

    /**
     * @return bool
     */
    public function isCustomLabel()
    {
        return $this->_value === self::CodeType_CustomLabel;
    }

    /**
     * @return bool
     */
    public function isSaleRecordID()
    {
        return $this->_value === self::CodeType_SaleRecordID;
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

SellingManagerSearchTypeCodeType::_register();
