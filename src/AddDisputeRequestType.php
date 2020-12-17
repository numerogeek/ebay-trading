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
 * Enables a seller to create an Unpaid Item case against a buyer, or to cancel a
 * single line item order.
 * 
 * 
 * Although the seller is eligible to open up an Unpaid Item case two days after the buyer purchases the item
 * or wins the item through an auction, it is recommended that the seller contact the buyer first to try and make it
 * right before opening a case. The <a href="http://pages.ebay.com/help/sell/unpaid-items.html"
 * target="_blank">Unpaid Items</a> help page talks more about how a seller should handle an unpaid item.
 * 
 * 
 * To cancel a multiple line item order programmatically, the seller would have to use the <a
 * href="https://developer.ebay.com/Devzone/post-order/post-order_v2_cancellation__post.html" target="_blank">POST
 * /post-order/v2/cancellation</a> call of the
 * Post-Order API
 * .
 **/
class AddDisputeRequestType extends AbstractRequestType
{
    const TAG = 'AddDisputeRequest';
    const NAME = 'AddDisputeRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'AddDispute';

    /**
     * @var DisputeExplanationCodeType|null
     */
    protected $DisputeExplanation = null;

    /**
     * @var DisputeReasonCodeType|null
     */
    protected $DisputeReason = null;

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var string|null
     */
    protected $TransactionID = null;

    /**
     * @var string|null
     */
    protected $OrderLineItemID = null;


    /**
     * @return DisputeExplanationCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisputeExplanation()
    {
        return $this->_dc($this->DisputeExplanation);
    }

    /**
     * @param DisputeExplanationCodeType|null $value
     * @return void
     */
    public function setDisputeExplanation($value)
    {
        $this->DisputeExplanation = $this->_enum($value, DisputeExplanationCodeType::class);
    }

    /**
     * @return DisputeReasonCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisputeReason()
    {
        return $this->_dc($this->DisputeReason);
    }

    /**
     * @param DisputeReasonCodeType|null $value
     * @return void
     */
    public function setDisputeReason($value)
    {
        $this->DisputeReason = $this->_enum($value, DisputeReasonCodeType::class);
    }

    /**
     * @return ItemIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemID()
    {
        return $this->_dc($this->ItemID, 'ItemID');
    }

    /**
     * @param ItemIDType|null $value
     * @return void
     */
    public function setItemID($value)
    {
        $this->ItemID = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTransactionID()
    {
        return $this->_dc($this->TransactionID, 'TransactionID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTransactionID($value)
    {
        $this->TransactionID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderLineItemID()
    {
        return $this->_dc($this->OrderLineItemID, 'OrderLineItemID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setOrderLineItemID($value)
    {
        $this->OrderLineItemID = self::_string($value);
    }

    /**
     * @return AddDisputeResponseType|EbatNs_ResponseError
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
            'DisputeExplanation' => ['type' => 'DisputeExplanationCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'DisputeReason' => ['type' => 'DisputeReasonCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'TransactionID' => [],
            'OrderLineItemID' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AddDisputeRequestType::_register();
