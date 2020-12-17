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
 * Type defining the
 * ConditionValues.Condition
 * container that is returned at the category level in the
 * GetCategoryFeatures
 * response if 'ConditionValues' is specified as a
 * FeatureID
 * value, or if no
 * FeatureID
 * values are specified. A
 * ConditionValues.Condition
 * container is returned for each supported item condition value for each eBay category returned in the response.
 * 
 * 
 * <span class="tablenote"><strong>Note:</strong>
 * Starting in mid-September 2020, the 'Manufacturer Refurbished' item condition (Condition ID 2000) will no
 * longer be supported on the US and Australian marketplaces. Active listings on these two marketplaces will
 * automatically be updated by eBay to the 'Seller Refurbished' item condition (Condition ID 2500). Once this change
 * happens, if a seller attempts to create a new listing or revise an existing listing with the Inventory or Trading
 * APIs using the 'Manufacturer Refurbished' item condition, the listing or revision will be blocked.
 * </span>
 **/
class ConditionType extends EbatNs_ComplexType
{
    const TAG = 'ConditionType';
    const NAME = 'ConditionType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $ID = null;

    /**
     * @var string|null
     */
    protected $DisplayName = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getID()
    {
        return $this->_dc($this->ID, 'ID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setID($value)
    {
        $this->ID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisplayName()
    {
        return $this->_dc($this->DisplayName, 'DisplayName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDisplayName($value)
    {
        $this->DisplayName = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ID' => ['type' => 'int'],
            'DisplayName' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ConditionType::_register();
