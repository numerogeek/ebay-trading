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
 * to a template. Returns the remaining rules in the response.
 * This call is subject to change without notice; the
 * deprecation process is inapplicable to this call.
 **/
class DeleteSellingManagerTemplateAutomationRuleRequestType extends AbstractRequestType
{
    const TAG = 'DeleteSellingManagerTemplateAutomationRuleRequest';
    const NAME = 'DeleteSellingManagerTemplateAutomationRuleRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'DeleteSellingManagerTemplateAutomationRule';

    /**
     * @var int|null
     */
    protected $SaleTemplateID = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $DeleteAutomatedListingRule = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $DeleteAutomatedRelistingRule = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $DeleteAutomatedSecondChanceOfferRule = null;


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
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDeleteAutomatedListingRule()
    {
        return $this->_dc($this->DeleteAutomatedListingRule === 'true', 'DeleteAutomatedListingRule');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setDeleteAutomatedListingRule($value)
    {
        $this->DeleteAutomatedListingRule = self::_bool($value);
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
     * @return DeleteSellingManagerTemplateAutomationRuleResponseType|EbatNs_ResponseError
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
            'DeleteAutomatedListingRule' => ['type' => 'bool'],
            'DeleteAutomatedRelistingRule' => ['type' => 'bool'],
            'DeleteAutomatedSecondChanceOfferRule' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

DeleteSellingManagerTemplateAutomationRuleRequestType::_register();
