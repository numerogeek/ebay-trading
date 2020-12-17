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
 * Type used by the
 * ValueRecommendation
 * container to provide recommended names for recommended item specifics.
 **/
class ValueRecommendationType extends EbatNs_ComplexType
{
    const TAG = 'ValueRecommendationType';
    const NAME = 'ValueRecommendationType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Value = null;

    /**
     * @var RecommendationValidationRulesType|null
     */
    protected $ValidationRules = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getValue()
    {
        return $this->_dc($this->Value, 'Value');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setValue($value)
    {
        $this->Value = self::_string($value);
    }

    /**
     * @return RecommendationValidationRulesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getValidationRules()
    {
        return $this->_dc($this->ValidationRules, 'ValidationRules');
    }

    /**
     * @param RecommendationValidationRulesType|null $value
     * @return void
     */
    public function setValidationRules($value)
    {
        $this->ValidationRules = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Value' => [],
            'ValidationRules' => ['type' => 'RecommendationValidationRulesType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ValueRecommendationType::_register();
