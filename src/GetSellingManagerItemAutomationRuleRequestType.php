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
 * Retrieves the set of Selling Manager automation rules associated with an item. This call is subject to change
 * without notice; the deprecation process is inapplicable to this call. The user must have a Selling Manager Pro
 * subscription to use this call.
 **/
class GetSellingManagerItemAutomationRuleRequestType extends AbstractRequestType
{
    const TAG = 'GetSellingManagerItemAutomationRuleRequest';
    const NAME = 'GetSellingManagerItemAutomationRuleRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetSellingManagerItemAutomationRule';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;


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
     * @return GetSellingManagerItemAutomationRuleResponseType|EbatNs_ResponseError
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
        self::assignElements(['ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

GetSellingManagerItemAutomationRuleRequestType::_register();
