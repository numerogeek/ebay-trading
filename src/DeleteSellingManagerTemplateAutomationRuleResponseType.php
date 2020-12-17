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
 * Contains the set of automation rules associated with the specified template.
 **/
class DeleteSellingManagerTemplateAutomationRuleResponseType extends EbatNs_Response
{
    const TAG = 'DeleteSellingManagerTemplateAutomationRuleResponseType';
    const NAME = 'DeleteSellingManagerTemplateAutomationRuleResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

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
     * @var FeesType|null
     */
    protected $Fees = null;


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
     * @return FeesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFees()
    {
        return $this->_dc($this->Fees, 'Fees');
    }

    /**
     * @param FeesType|null $value
     * @return void
     */
    public function setFees($value)
    {
        $this->Fees = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'AutomatedListingRule' => ['type' => 'SellingManagerAutoListType', 'xmlns' => self::XMLNS],
            'AutomatedRelistingRule' => ['type' => 'SellingManagerAutoRelistType', 'xmlns' => self::XMLNS],
            'AutomatedSecondChanceOfferRule' => ['type' => 'SellingManagerAutoSecondChanceOfferType', 'xmlns' => self::XMLNS],
            'Fees' => ['type' => 'FeesType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

DeleteSellingManagerTemplateAutomationRuleResponseType::_register();
