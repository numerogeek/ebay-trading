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
 * This is the base response type for the
 * GetDispute
 * call. This call retrieves the details of a seller-initiated dispute. Seller-initiated disputes include
 * mutually-cancelled transactions and unpaid items.
 * 
 * <span class="tablenote"><strong>Note:</strong>
 * This call does not support buyer-initiated cases created through eBay's Resolution Center. Buyer-initiated
 * cases include Item Not Received (INR) and escalated Return cases. To retrieve and manage eBay Money Back
 * Guarantee cases, the Case Management calls of the <a
 * href="http://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Post-Order API</a> can be used
 * instead.
 * </span>
 **/
class GetDisputeResponseType extends EbatNs_Response
{
    const TAG = 'GetDisputeResponseType';
    const NAME = 'GetDisputeResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var DisputeType|null
     */
    protected $Dispute = null;


    /**
     * @return DisputeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDispute()
    {
        return $this->_dc($this->Dispute, 'Dispute');
    }

    /**
     * @param DisputeType|null $value
     * @return void
     */
    public function setDispute($value)
    {
        $this->Dispute = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Dispute' => ['type' => 'DisputeType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

GetDisputeResponseType::_register();
