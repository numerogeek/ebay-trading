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
 * Revises, or adds to, the set of Selling Manager automation rules associated with an item.
 * 
 * 
 * This call is subject to change without notice; the deprecation process is inapplicable to this call. You must
 * have a Selling Manager Pro subscription to use this call.
 * 
 * 
 * Using this call, you can add an automated relisting rule. You also can add a Second Chance Offer rule. Note
 * that automated relisting rules can only be set on templates. An automated relisting rule for an item is inherited
 * from a template.
 * 
 * 
 * This call also enables you to specify particular information about automation rules.
 * 
 * 
 * If a node is not passed in the call, the setting for the corresponding
 * automation rule remains unchanged.
 **/
class SetSellingManagerItemAutomationRuleRequestType extends AbstractRequestType
{
    const TAG = 'SetSellingManagerItemAutomationRuleRequest';
    const NAME = 'SetSellingManagerItemAutomationRuleRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'SetSellingManagerItemAutomationRule';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var SellingManagerAutoRelistType|null
     */
    protected $AutomatedRelistingRule = null;

    /**
     * @var SellingManagerAutoSecondChanceOfferType|null
     */
    protected $AutomatedSecondChanceOfferRule = null;


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
     * @return SellingManagerAutoRelistType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAutomatedRelistingRule()
    {
        return $this->_dc($this->AutomatedRelistingRule, 'AutomatedRelistingRule');
    }

    /**
     * @param SellingManagerAutoRelistType|null $value
     * @return void
     */
    public function setAutomatedRelistingRule($value)
    {
        $this->AutomatedRelistingRule = $value;
    }

    /**
     * @return SellingManagerAutoSecondChanceOfferType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAutomatedSecondChanceOfferRule()
    {
        return $this->_dc($this->AutomatedSecondChanceOfferRule, 'AutomatedSecondChanceOfferRule');
    }

    /**
     * @param SellingManagerAutoSecondChanceOfferType|null $value
     * @return void
     */
    public function setAutomatedSecondChanceOfferRule($value)
    {
        $this->AutomatedSecondChanceOfferRule = $value;
    }

    /**
     * @return SetSellingManagerItemAutomationRuleResponseType|EbatNs_ResponseError
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
            'AutomatedRelistingRule' => ['type' => 'SellingManagerAutoRelistType', 'xmlns' => self::XMLNS],
            'AutomatedSecondChanceOfferRule' => ['type' => 'SellingManagerAutoSecondChanceOfferType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SetSellingManagerItemAutomationRuleRequestType::_register();
