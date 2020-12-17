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
 * This enumerated type contains the values that will indicate whether a seller can specify their own custom values
 * for an Item Specific, or if they need to use a value (or values) that eBay has defined.
 **/
class SelectionModeCodeType extends EbatNs_EnumType
{
    const TAG = 'SelectionModeCodeType';
    const NAME = 'SelectionModeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Automatic criteria. Reserved for future use.
     **/
    const CodeType_Automatic = 'Automatic';

    /**
     * Manual criteria. Reserved for future use.
     **/
    const CodeType_Manual = 'Manual';

    /**
     * Indicates that the Item Specifics defined for an eBay catalog product will get pre-filled for a listing if the
     * seller successfully matches their item to a product in eBay's catalog. To match an item to an eBay catalog
     * product when adding or revising a listing, the seller provides either an
     * Add
     * /
     * Revise
     * /
     * Relist
     * eBay Product ID (ePID), or a Global Trade Identification Number such as a UPC, an EAN, anISBN), or a Brand/MPN
     * pair.
     **/
    const CodeType_Prefilled = 'Prefilled';

    /**
     * If this value is returned, it is recommended that the seller only use one of the recommended values for the
     * corresponding Item Specific. In other words, the seller should use the exact string provided in one of the
     * corresponding
     * ValueRecommendation.Value
     * fields when creating, revising, or relisting an item and using that particular Item Specific.
     **/
    const CodeType_SelectionOnly = 'SelectionOnly';

    /**
     * Indicates that the seller is allowed to specify their own value(s) for the corresponding Item Specific when
     * creating, revising, or relisting an item and using that particular Item Specific.
     **/
    const CodeType_FreeText = 'FreeText';

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
     * @return SelectionModeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SelectionModeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isAutomatic()
    {
        return $this->_value === self::CodeType_Automatic;
    }

    /**
     * @return bool
     */
    public function isManual()
    {
        return $this->_value === self::CodeType_Manual;
    }

    /**
     * @return bool
     */
    public function isPrefilled()
    {
        return $this->_value === self::CodeType_Prefilled;
    }

    /**
     * @return bool
     */
    public function isSelectionOnly()
    {
        return $this->_value === self::CodeType_SelectionOnly;
    }

    /**
     * @return bool
     */
    public function isFreeText()
    {
        return $this->_value === self::CodeType_FreeText;
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

SelectionModeCodeType::_register();
