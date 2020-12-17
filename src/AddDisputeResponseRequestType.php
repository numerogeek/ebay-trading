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
 * This call enables the seller to respond to an Item Not Received (INR) dispute opened by a buyer through PayPal's
 * Purchase Protection program, or to update an Unpaid Item case. To respond to a case opened by the buyer through
 * eBay's Resolution Center, the seller should use the <a
 * href="http://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Case Management calls</a> of the
 * Post-Order API
 * , the <a href="http://developer.ebay.com/Devzone/resolution-case-management/CallRef/index.html"
 * target="_blank">Resolution Case Management API</a>,  or manage the case manually through the eBay Resolution
 * Center.
 **/
class AddDisputeResponseRequestType extends AbstractRequestType
{
    const TAG = 'AddDisputeResponseRequest';
    const NAME = 'AddDisputeResponseRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'AddDisputeResponse';

    /**
     * @var DisputeIDType|null
     */
    protected $DisputeID = null;

    /**
     * @var string|null
     */
    protected $MessageText = null;

    /**
     * @var DisputeActivityCodeType|null
     */
    protected $DisputeActivity = null;

    /**
     * @var string|null
     */
    protected $ShippingCarrierUsed = null;

    /**
     * @var string|null
     */
    protected $ShipmentTrackNumber = null;

    /**
     * @var string|null
     */
    protected $ShippingTime = null;


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
    public function getMessageText()
    {
        return $this->_dc($this->MessageText, 'MessageText');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMessageText($value)
    {
        $this->MessageText = self::_string($value);
    }

    /**
     * @return DisputeActivityCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisputeActivity()
    {
        return $this->_dc($this->DisputeActivity);
    }

    /**
     * @param DisputeActivityCodeType|null $value
     * @return void
     */
    public function setDisputeActivity($value)
    {
        $this->DisputeActivity = $this->_enum($value, DisputeActivityCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingCarrierUsed()
    {
        return $this->_dc($this->ShippingCarrierUsed, 'ShippingCarrierUsed');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShippingCarrierUsed($value)
    {
        $this->ShippingCarrierUsed = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShipmentTrackNumber()
    {
        return $this->_dc($this->ShipmentTrackNumber, 'ShipmentTrackNumber');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShipmentTrackNumber($value)
    {
        $this->ShipmentTrackNumber = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingTime()
    {
        return $this->_dc($this->ShippingTime, 'ShippingTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShippingTime($value)
    {
        $this->ShippingTime = self::_string($value);
    }

    /**
     * @return AddDisputeResponseResponseType|EbatNs_ResponseError
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
            'MessageText' => [],
            'DisputeActivity' => ['type' => 'DisputeActivityCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ShippingCarrierUsed' => [],
            'ShipmentTrackNumber' => [],
            'ShippingTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AddDisputeResponseRequestType::_register();
