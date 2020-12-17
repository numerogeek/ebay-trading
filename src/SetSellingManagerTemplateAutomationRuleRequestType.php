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
 * Revises, or adds to, the Selling Manager automation rules associated with a template.
 * 
 * 
 * This call is subject to change without notice; the deprecation process is inapplicable to this call. You must
 * have a Selling Manager Pro subscription to use this call.
 * 
 * 
 * Using this call, you can add either an automated listing or relisting rule, but not both. You also can add a
 * Second Chance Offer rule.
 * 
 * 
 * This call also enables you to specify particular information about automation rules.
 * 
 * 
 * If a node is not passed in the call, the setting for the corresponding automation rule remains unchanged.
 **/
class SetSellingManagerTemplateAutomationRuleRequestType extends AbstractRequestType
{
    const TAG = 'SetSellingManagerTemplateAutomationRuleRequest';
    const NAME = 'SetSellingManagerTemplateAutomationRuleRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'SetSellingManagerTemplateAutomationRule';

    /**
     * @var int|null
     */
    protected $SaleTemplateID = null;

    /**
     * @var SellingManagerAutoListType|null
     */
    protected $AutomatedListingRule = null;

    /**
     * @var SellingManagerAutoRelistType|null
     */
    protected $AutomatedRelistingRule = null;

    /**
     * @var SellingManagerAutoSecondChanceOfferType|null
     */
    protected $AutomatedSecondChanceOfferRule = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSaleTemplateID()
    {
        return $this->_dc($this->SaleTemplateID, 'SaleTemplateID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setSaleTemplateID($value)
    {
        $this->SaleTemplateID = self::_int($value);
    }

    /**
     * @return SellingManagerAutoListType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAutomatedListingRule()
    {
        return $this->_dc($this->AutomatedListingRule, 'AutomatedListingRule');
    }

    /**
     * @param SellingManagerAutoListType|null $value
     * @return void
     */
    public function setAutomatedListingRule($value)
    {
        $this->AutomatedListingRule = $value;
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
     * @return SetSellingManagerTemplateAutomationRuleResponseType|EbatNs_ResponseError
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
            'SaleTemplateID' => ['type' => 'int'],
            'AutomatedListingRule' => ['type' => 'SellingManagerAutoListType', 'xmlns' => self::XMLNS],
            'AutomatedRelistingRule' => ['type' => 'SellingManagerAutoRelistType', 'xmlns' => self::XMLNS],
            'AutomatedSecondChanceOfferRule' => ['type' => 'SellingManagerAutoSecondChanceOfferType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SetSellingManagerTemplateAutomationRuleRequestType::_register();
