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
 * ReturnPolicyDetails.ReturnsWithin
 * container that is returned in
 * GeteBayDetails
 * . This container contains the values that may be used in the
 * ReturnPolicy.ReturnsWithinOption
 * field of Add/Revise/Relist API calls.
 * 
 * <span class="tablenote">
 * Note:
 * The
 * GeteBayDetails
 * call returns site-default Return Policy settings. For most categories within a given eBay site, the supported
 * Return Policy options/values are the same, but there a few exceptions. To discover what return durations that a
 * particular category supports, call
 * GetCategoryFeatures
 * and include <code>DomesticReturnsDurationValues</code> and/or <code>InternationalReturnsDurationValues</code> as
 * FeatureID
 * values to see the return durations available for domestic and international returns, respectively.
 * </span>
 **/
class ReturnsWithinDetailsType extends EbatNs_ComplexType
{
    const TAG = 'ReturnsWithinDetailsType';
    const NAME = 'ReturnsWithinDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $ReturnsWithinOption = null;

    /**
     * @var string|null
     */
    protected $Description = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReturnsWithinOption()
    {
        return $this->_dc($this->ReturnsWithinOption, 'ReturnsWithinOption');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setReturnsWithinOption($value)
    {
        $this->ReturnsWithinOption = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDescription()
    {
        return $this->_dc($this->Description, 'Description');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDescription($value)
    {
        $this->Description = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ReturnsWithinOption' => [],
            'Description' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ReturnsWithinDetailsType::_register();
