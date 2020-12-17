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
 * The number of disputes that match a given filter.
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
class DisputeFilterCountType extends EbatNs_ComplexType
{
    const TAG = 'DisputeFilterCountType';
    const NAME = 'DisputeFilterCountType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var DisputeFilterTypeCodeType|null
     */
    protected $DisputeFilterType = null;

    /**
     * @var int|null
     */
    protected $TotalAvailable = null;


    /**
     * @return DisputeFilterTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisputeFilterType()
    {
        return $this->_dc($this->DisputeFilterType);
    }

    /**
     * @param DisputeFilterTypeCodeType|null $value
     * @return void
     */
    public function setDisputeFilterType($value)
    {
        $this->DisputeFilterType = $this->_enum($value, DisputeFilterTypeCodeType::class);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalAvailable()
    {
        return $this->_dc($this->TotalAvailable, 'TotalAvailable');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setTotalAvailable($value)
    {
        $this->TotalAvailable = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'DisputeFilterType' => ['type' => 'DisputeFilterTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'TotalAvailable' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

DisputeFilterCountType::_register();
