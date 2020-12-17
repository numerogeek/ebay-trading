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
 * Enables a seller to "reverse" an Unpaid Item dispute that has been closed in case the buyer and seller are able
 * to reach a mutual agreement. If this action is successful, the seller receives a Final Value Fee
 * credit and the buyer's Unpaid Item strike are both reversed, if applicable.
 * The dispute might have resulted
 * in a strike to the buyer and a Final Value Fee credit to the seller. A buyer and
 * seller sometimes come to agreement after a dispute has been closed. In particular,
 * the seller might discover that the buyer actually paid, or the buyer might agree
 * to pay the seller's fees in exchange for having the strike removed.
 * 
 * A dispute can only be reversed if it was closed with
 * DisputeActivity
 * set to
 * 
 * SellerEndCommunication
 * ,
 * CameToAgreementNeedFVFCredit
 * , or
 * 
 * MutualAgreementOrNoBuyerResponse
 * .
 **/
class SellerReverseDisputeRequestType extends AbstractRequestType
{
    const TAG = 'SellerReverseDisputeRequest';
    const NAME = 'SellerReverseDisputeRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'SellerReverseDispute';

    /**
     * @var DisputeIDType|null
     */
    protected $DisputeID = null;

    /**
     * @var DisputeResolutionReasonCodeType|null
     */
    protected $DisputeResolutionReason = null;


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
     * @return SellerReverseDisputeResponseType|EbatNs_ResponseError
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
        self::assignElements([
            'DisputeID' => ['type' => 'DisputeIDType', 'xmlns' => self::XMLNS],
            'DisputeResolutionReason' => ['type' => 'DisputeResolutionReasonCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellerReverseDisputeRequestType::_register();
