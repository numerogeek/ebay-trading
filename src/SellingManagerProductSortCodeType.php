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
 * Sorting specifications for retrieved Selling Manager Inventory products.
 **/
class SellingManagerProductSortCodeType extends EbatNs_EnumType
{
    const TAG = 'SellingManagerProductSortCodeType';
    const NAME = 'SellingManagerProductSortCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Sort products by by quantity currently listed.
     **/
    const CodeType_ActiveQuantity = 'ActiveQuantity';

    /**
     * Sort unlisted products by availability to list.
     **/
    const CodeType_AvailableToList = 'AvailableToList';

    /**
     * Sort by average price of sold items.
     **/
    const CodeType_AveragePrice = 'AveragePrice';

    /**
     * Sort by average unit cost of items.
     **/
    const CodeType_AverageUnitCost = 'AverageUnitCost';

    /**
     * Sort products by label.
     **/
    const CodeType_CustomLabel = 'CustomLabel';

    /**
     * Sort by product name.
     **/
    const CodeType_ProductName = 'ProductName';

    /**
     * Sort by submitted date.
     **/
    const CodeType_LastSubmittedDate = 'LastSubmittedDate';

    /**
     * Sort by quantity scheduled to be listed.
     **/
    const CodeType_ScheduledQuantity = 'ScheduledQuantity';

    /**
     * Sort by quantity sold.
     **/
    const CodeType_SoldQuantity = 'SoldQuantity';

    /**
     * Sort by the percentage of ended listings that had a sale.
     **/
    const CodeType_SuccessPercent = 'SuccessPercent';

    /**
     * Sort by number of unsold items.
     **/
    const CodeType_UnsoldQuantity = 'UnsoldQuantity';

    /**
     * Sort products by folder name.
     **/
    const CodeType_FolderName = 'FolderName';

    
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
     * @return SellingManagerProductSortCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SellingManagerProductSortCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isActiveQuantity()
    {
        return $this->_value === self::CodeType_ActiveQuantity;
    }

    /**
     * @return bool
     */
    public function isAvailableToList()
    {
        return $this->_value === self::CodeType_AvailableToList;
    }

    /**
     * @return bool
     */
    public function isAveragePrice()
    {
        return $this->_value === self::CodeType_AveragePrice;
    }

    /**
     * @return bool
     */
    public function isAverageUnitCost()
    {
        return $this->_value === self::CodeType_AverageUnitCost;
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
    public function isProductName()
    {
        return $this->_value === self::CodeType_ProductName;
    }

    /**
     * @return bool
     */
    public function isLastSubmittedDate()
    {
        return $this->_value === self::CodeType_LastSubmittedDate;
    }

    /**
     * @return bool
     */
    public function isScheduledQuantity()
    {
        return $this->_value === self::CodeType_ScheduledQuantity;
    }

    /**
     * @return bool
     */
    public function isSoldQuantity()
    {
        return $this->_value === self::CodeType_SoldQuantity;
    }

    /**
     * @return bool
     */
    public function isSuccessPercent()
    {
        return $this->_value === self::CodeType_SuccessPercent;
    }

    /**
     * @return bool
     */
    public function isUnsoldQuantity()
    {
        return $this->_value === self::CodeType_UnsoldQuantity;
    }

    /**
     * @return bool
     */
    public function isFolderName()
    {
        return $this->_value === self::CodeType_FolderName;
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

SellingManagerProductSortCodeType::_register();
