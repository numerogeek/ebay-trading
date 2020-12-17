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
 * Type defining the response of the
 * AddDispute
 * call. Upon a successful call, the response contains a newly created
 * DisputeID
 * value, which confirms that an Unpaid Item case was created, or that a single line item order was successfully
 * cancelled.
 **/
class AddDisputeResponseType extends EbatNs_Response
{
    const TAG = 'AddDisputeResponseType';
    const NAME = 'AddDisputeResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['DisputeID' => ['type' => 'DisputeIDType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

AddDisputeResponseType::_register();
