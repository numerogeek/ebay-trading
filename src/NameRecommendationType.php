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
 * This type is used by the
 * NameRecommendation
 * container that is returned in
 * GetCategorySpecifics
 * . A
 * NameRecommendation
 * container is returned for every mandatory and recommended Item Specific for a category, and provides the
 * recommended/most popular values for the Item Specific, as well as details, instructions, and constraint
 * information for each Item Specific name-value pairs.
 **/
class NameRecommendationType extends EbatNs_ComplexType
{
    const TAG = 'NameRecommendationType';
    const NAME = 'NameRecommendationType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Name = null;

    /**
     * @var RelevanceIndicatorType|null
     */
    protected $RelevanceIndicator = null;

    /**
     * @var RecommendationValidationRulesType|null
     */
    protected $ValidationRules = null;

    /**
     * @var ValueRecommendationType[]|null
     */
    protected $ValueRecommendation = [];

    /**
     * @var string|null
     */
    protected $HelpURL = null;

    /**
     * @var ItemSpecificSourceCodeType|null
     */
    protected $Source = null;

    /**
     * @var string|null
     */
    protected $HelpText = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getName()
    {
        return $this->_dc($this->Name, 'Name');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setName($value)
    {
        $this->Name = self::_string($value);
    }

    /**
     * @return RelevanceIndicatorType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRelevanceIndicator()
    {
        return $this->_dc($this->RelevanceIndicator, 'RelevanceIndicator');
    }

    /**
     * @param RelevanceIndicatorType|null $value
     * @return void
     */
    public function setRelevanceIndicator($value)
    {
        $this->RelevanceIndicator = $value;
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
     * @return ValueRecommendationType[]|ValueRecommendationType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getValueRecommendation($index = null)
    {
        return $this->_dc($index === null
            ? $this->ValueRecommendation
            : (count($this->ValueRecommendation) > $index
                ? $this->ValueRecommendation[$index]
                : null), 'ValueRecommendation');
    }

    /**
     * @param ValueRecommendationType|null|ValueRecommendationType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setValueRecommendation($value, $index = null)
    {
        if ($index === null) {
            $this->ValueRecommendation = $value;
        } else {
            $this->ValueRecommendation[$index] = [];
            
            foreach ($value as $item) {
                $this->addValueRecommendation($item);
            }
        }
    }

    /**
     * @param ValueRecommendationType|null $value
     * @return void
     */
    public function addValueRecommendation($value)
    {
        $this->ValueRecommendation[] = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHelpURL()
    {
        return $this->_dc($this->HelpURL, 'HelpURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setHelpURL($value)
    {
        $this->HelpURL = self::_string($value);
    }

    /**
     * @return ItemSpecificSourceCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSource()
    {
        return $this->_dc($this->Source);
    }

    /**
     * @param ItemSpecificSourceCodeType|null $value
     * @return void
     */
    public function setSource($value)
    {
        $this->Source = $this->_enum($value, ItemSpecificSourceCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHelpText()
    {
        return $this->_dc($this->HelpText, 'HelpText');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setHelpText($value)
    {
        $this->HelpText = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Name' => [],
            'RelevanceIndicator' => ['type' => 'RelevanceIndicatorType', 'xmlns' => self::XMLNS],
            'ValidationRules' => ['type' => 'RecommendationValidationRulesType', 'xmlns' => self::XMLNS],
            'ValueRecommendation' => ['type' => 'ValueRecommendationType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'HelpURL' => [],
            'Source' => ['type' => 'ItemSpecificSourceCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'HelpText' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

NameRecommendationType::_register();
