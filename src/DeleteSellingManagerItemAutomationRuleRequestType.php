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
 * Removes the association of Selling Manager automation rules
 * to an item. Returns the remaining rules in the response.
 * 
 * This call is subject to change without notice; the
 * deprecation process is inapplicable to this call.
 **/
class DeleteSellingManagerItemAutomationRuleRequestType extends AbstractRequestType
{
    const TAG = 'DeleteSellingManagerItemAutomationRuleRequest';
    const NAME = 'DeleteSellingManagerItemAutomationRuleRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'DeleteSellingManagerItemAutomationRule';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $DeleteAutomatedRelistingRule = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $DeleteAutomatedSecondChanceOfferRule = null;


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
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDeleteAutomatedRelistingRule()
    {
        return $this->_dc($this->DeleteAutomatedRelistingRule === 'true', 'DeleteAutomatedRelistingRule');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setDeleteAutomatedRelistingRule($value)
    {
        $this->DeleteAutomatedRelistingRule = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDeleteAutomatedSecondChanceOfferRule()
    {
        return $this->_dc($this->DeleteAutomatedSecondChanceOfferRule === 'true', 'DeleteAutomatedSecondChanceOfferRule');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setDeleteAutomatedSecondChanceOfferRule($value)
    {
        $this->DeleteAutomatedSecondChanceOfferRule = self::_bool($value);
    }

    /**
     * @return DeleteSellingManagerItemAutomationRuleResponseType|EbatNs_ResponseError
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
            'DeleteAutomatedRelistingRule' => ['type' => 'bool'],
            'DeleteAutomatedSecondChanceOfferRule' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

DeleteSellingManagerItemAutomationRuleRequestType::_register();
