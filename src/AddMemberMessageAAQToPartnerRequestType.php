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
 * Enables a buyer and seller in an order relationship to
 * send messages to each other's My Messages Inboxes.
 **/
class AddMemberMessageAAQToPartnerRequestType extends AbstractRequestType
{
    const TAG = 'AddMemberMessageAAQToPartnerRequest';
    const NAME = 'AddMemberMessageAAQToPartnerRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'AddMemberMessageAAQToPartner';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var MemberMessageType|null
     */
    protected $MemberMessage = null;


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
     * @return MemberMessageType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMemberMessage()
    {
        return $this->_dc($this->MemberMessage, 'MemberMessage');
    }

    /**
     * @param MemberMessageType|null $value
     * @return void
     */
    public function setMemberMessage($value)
    {
        $this->MemberMessage = $value;
    }

    /**
     * @return AddMemberMessageAAQToPartnerResponseType|EbatNs_ResponseError
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
            'MemberMessage' => ['type' => 'MemberMessageType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AddMemberMessageAAQToPartnerRequestType::_register();
