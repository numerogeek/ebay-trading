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
 * Contains all information about a dispute resolution. A dispute
 * can have a resolution even if the seller does not receive payment.
 * The resolution can have various results, including a Final Value Fee credit to
 * the seller or a strike to the buyer.
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
class DisputeResolutionType extends EbatNs_ComplexType
{
    const TAG = 'DisputeResolutionType';
    const NAME = 'DisputeResolutionType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var DisputeResolutionRecordTypeCodeType|null
     */
    protected $DisputeResolutionRecordType = null;

    /**
     * @var DisputeResolutionReasonCodeType|null
     */
    protected $DisputeResolutionReason = null;

    /**
     * @var string|null
     */
    protected $ResolutionTime = null;


    /**
     * @return DisputeResolutionRecordTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisputeResolutionRecordType()
    {
        return $this->_dc($this->DisputeResolutionRecordType);
    }

    /**
     * @param DisputeResolutionRecordTypeCodeType|null $value
     * @return void
     */
    public function setDisputeResolutionRecordType($value)
    {
        $this->DisputeResolutionRecordType = $this->_enum($value, DisputeResolutionRecordTypeCodeType::class);
    }

    /**
     * @return DisputeResolutionReasonCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisputeResolutionReason()
    {
        return $this->_dc($this->DisputeResolutionReason);
    }

    /**
     * @param DisputeResolutionReasonCodeType|null $value
     * @return void
     */
    public function setDisputeResolutionReason($value)
    {
        $this->DisputeResolutionReason = $this->_enum($value, DisputeResolutionReasonCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getResolutionTime()
    {
        return $this->_dc($this->ResolutionTime, 'ResolutionTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setResolutionTime($value)
    {
        $this->ResolutionTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'DisputeResolutionRecordType' => ['type' => 'DisputeResolutionRecordTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'DisputeResolutionReason' => ['type' => 'DisputeResolutionReasonCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ResolutionTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

DisputeResolutionType::_register();
