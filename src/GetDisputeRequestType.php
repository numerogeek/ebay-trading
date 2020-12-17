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
 * This is the base request type for the
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
class GetDisputeRequestType extends AbstractRequestType
{
    const TAG = 'GetDisputeRequest';
    const NAME = 'GetDisputeRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetDispute';

    /**
     * @var DisputeIDType|null
     */
    protected $DisputeID = null;


    /**
     * @return DisputeIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisputeID()
    {
        return $this->_dc($this->DisputeID, 'DisputeID');
    }

    /**
     * @param DisputeIDType|null $value
     * @return void
     */
    public function setDisputeID($value)
    {
        $this->DisputeID = $value;
    }

    /**
     * @return GetDisputeResponseType|EbatNs_ResponseError
     * @param EbatNs_Client
     **/
    function call($client)
    {
        return $client->call(self::REQUEST, $this);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['DisputeID' => ['type' => 'DisputeIDType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

GetDisputeRequestType::_register();
