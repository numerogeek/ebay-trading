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
 * Enables a seller who has opted into the automated Unpaid Item Assistant mechanism to disable the Unpaid Item
 * Assistant at the order line item level. This call can be made whether or not a Unpaid Item case exists for the
 * order line item. If an Unpaid Item case has already been created by the Unpaid Item Assistant, it is converted to
 * a "manual" case for the seller to manage like any other manually-created case.
 **/
class DisableUnpaidItemAssistanceRequestType extends AbstractRequestType
{
    const TAG = 'DisableUnpaidItemAssistanceRequest';
    const NAME = 'DisableUnpaidItemAssistanceRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'DisableUnpaidItemAssistance';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var string|null
     */
    protected $TransactionID = null;

    /**
     * @var DisputeIDType|null
     */
    protected $DisputeID = null;

    /**
     * @var string|null
     */
    protected $OrderLineItemID = null;


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
     * @return DisableUnpaidItemAssistanceResponseType|EbatNs_ResponseError
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
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'TransactionID' => [],
            'DisputeID' => ['type' => 'DisputeIDType', 'xmlns' => self::XMLNS],
            'OrderLineItemID' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

DisableUnpaidItemAssistanceRequestType::_register();
