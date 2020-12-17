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
 * Retrieves the set of Selling Manager automation rules associated with a Selling Manager template. This call is
 * subject to change without notice; the deprecation process is inapplicable to this call. The user must have a
 * Selling Manager Pro subscription to use this call.
 **/
class GetSellingManagerTemplateAutomationRuleRequestType extends AbstractRequestType
{
    const TAG = 'GetSellingManagerTemplateAutomationRuleRequest';
    const NAME = 'GetSellingManagerTemplateAutomationRuleRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetSellingManagerTemplateAutomationRule';

    /**
     * @var int|null
     */
    protected $SaleTemplateID = null;


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
     * @return GetSellingManagerTemplateAutomationRuleResponseType|EbatNs_ResponseError
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
        self::assignElements(['SaleTemplateID' => ['type' => 'int']], parent::NAME);
        self::assignAttributes([]);
    }

}

GetSellingManagerTemplateAutomationRuleRequestType::_register();
