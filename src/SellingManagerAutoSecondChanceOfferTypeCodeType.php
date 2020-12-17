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
 * SellingManagerAutoSecondChanceOfferTypeCodeType - Specifies the type of Second Chance Offer automation rule that
 * will be added to an item.
 **/
class SellingManagerAutoSecondChanceOfferTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'SellingManagerAutoSecondChanceOfferTypeCodeType';
    const NAME = 'SellingManagerAutoSecondChanceOfferTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Sends a Second Chance Offer to all bidders who bid more than a specific amount.
     **/
    const CodeType_BidsGreaterThanAmount = 'BidsGreaterThanAmount';

    /**
     * Sends a Second Chance Offer to all bidders who bid more than the cost plus a specific amount.
     **/
    const CodeType_BidsGreaterThanCostPlusAmount = 'BidsGreaterThanCostPlusAmount';

    /**
     * Sends a Second Chance Offer to all bidders who bid more than the cost plus a specific percentage.
     **/
    const CodeType_BidsGreaterThanCostPlusPercentage = 'BidsGreaterThanCostPlusPercentage';

    /**
     * (out) Reserved for internal or future use.
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
     * @return SellingManagerAutoSecondChanceOfferTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SellingManagerAutoSecondChanceOfferTypeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isBidsGreaterThanAmount()
    {
        return $this->_value === self::CodeType_BidsGreaterThanAmount;
    }

    /**
     * @return bool
     */
    public function isBidsGreaterThanCostPlusAmount()
    {
        return $this->_value === self::CodeType_BidsGreaterThanCostPlusAmount;
    }

    /**
     * @return bool
     */
    public function isBidsGreaterThanCostPlusPercentage()
    {
        return $this->_value === self::CodeType_BidsGreaterThanCostPlusPercentage;
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

SellingManagerAutoSecondChanceOfferTypeCodeType::_register();
