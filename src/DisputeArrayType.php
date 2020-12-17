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
 * Type used by the
 * DisputeArray
 * container that is returned in the response of the
 * GetUserDisputes
 * call. The
 * DisputeArray
 * container holds an array of one or more disputes that match the filter criteria in the call request.
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
class DisputeArrayType extends EbatNs_ComplexType
{
    const TAG = 'DisputeArrayType';
    const NAME = 'DisputeArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var DisputeType[]|null
     */
    protected $Dispute = [];


    /**
     * @return DisputeType[]|DisputeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getDispute($index = null)
    {
        return $this->_dc($index === null
            ? $this->Dispute
            : (count($this->Dispute) > $index
                ? $this->Dispute[$index]
                : null), 'Dispute');
    }

    /**
     * @param DisputeType|null|DisputeType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setDispute($value, $index = null)
    {
        if ($index === null) {
            $this->Dispute = $value;
        } else {
            $this->Dispute[$index] = [];
            
            foreach ($value as $item) {
                $this->addDispute($item);
            }
        }
    }

    /**
     * @param DisputeType|null $value
     * @return void
     */
    public function addDispute($value)
    {
        $this->Dispute[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Dispute' => ['type' => 'DisputeType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

DisputeArrayType::_register();
