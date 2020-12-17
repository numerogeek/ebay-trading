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
 * ValidationRules
 * containers that are returned for each Item Specific in the
 * GetCategorySpecifics
 * response. The
 * ValidationRules
 * container consists of some rules and limits for the recommended Item Specific name and the corresponding values
 * for that Item Specific. These rules and limits will apply when the Item Specific is subsequently used in an
 * Add/Revise/Relist call.
 **/
class RecommendationValidationRulesType extends EbatNs_ComplexType
{
    const TAG = 'RecommendationValidationRulesType';
    const NAME = 'RecommendationValidationRulesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ValueTypeCodeType|null
     */
    protected $ValueType = null;

    /**
     * @var int|null
     */
    protected $MinValues = null;

    /**
     * @var int|null
     */
    protected $MaxValues = null;

    /**
     * @var SelectionModeCodeType|null
     */
    protected $SelectionMode = null;

    /**
     * @var AspectUsageCodeType|null
     */
    protected $AspectUsage = null;

    /**
     * @var int|null
     */
    protected $MaxValueLength = null;

    /**
     * @var ProductRequiredCodeType|null
     */
    protected $ProductRequired = null;

    /**
     * @var UsageConstraintCodeType|null
     */
    protected $UsageConstraint = null;

    /**
     * @var int|null
     */
    protected $Confidence = null;

    /**
     * @var NameValueRelationshipType[]|null
     */
    protected $Relationship = [];

    /**
     * @var VariationPictureRuleCodeType|null
     */
    protected $VariationPicture = null;

    /**
     * @var VariationSpecificsRuleCodeType|null
     */
    protected $VariationSpecifics = null;

    /**
     * @var ValueFormatCodeType|null
     */
    protected $ValueFormat = null;


    /**
     * @return ValueTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getValueType()
    {
        return $this->_dc($this->ValueType);
    }

    /**
     * @param ValueTypeCodeType|null $value
     * @return void
     */
    public function setValueType($value)
    {
        $this->ValueType = $this->_enum($value, ValueTypeCodeType::class);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMinValues()
    {
        return $this->_dc($this->MinValues, 'MinValues');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMinValues($value)
    {
        $this->MinValues = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxValues()
    {
        return $this->_dc($this->MaxValues, 'MaxValues');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMaxValues($value)
    {
        $this->MaxValues = self::_int($value);
    }

    /**
     * @return SelectionModeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSelectionMode()
    {
        return $this->_dc($this->SelectionMode);
    }

    /**
     * @param SelectionModeCodeType|null $value
     * @return void
     */
    public function setSelectionMode($value)
    {
        $this->SelectionMode = $this->_enum($value, SelectionModeCodeType::class);
    }

    /**
     * @return AspectUsageCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAspectUsage()
    {
        return $this->_dc($this->AspectUsage);
    }

    /**
     * @param AspectUsageCodeType|null $value
     * @return void
     */
    public function setAspectUsage($value)
    {
        $this->AspectUsage = $this->_enum($value, AspectUsageCodeType::class);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxValueLength()
    {
        return $this->_dc($this->MaxValueLength, 'MaxValueLength');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMaxValueLength($value)
    {
        $this->MaxValueLength = self::_int($value);
    }

    /**
     * @return ProductRequiredCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProductRequired()
    {
        return $this->_dc($this->ProductRequired);
    }

    /**
     * @param ProductRequiredCodeType|null $value
     * @return void
     */
    public function setProductRequired($value)
    {
        $this->ProductRequired = $this->_enum($value, ProductRequiredCodeType::class);
    }

    /**
     * @return UsageConstraintCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUsageConstraint()
    {
        return $this->_dc($this->UsageConstraint);
    }

    /**
     * @param UsageConstraintCodeType|null $value
     * @return void
     */
    public function setUsageConstraint($value)
    {
        $this->UsageConstraint = $this->_enum($value, UsageConstraintCodeType::class);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getConfidence()
    {
        return $this->_dc($this->Confidence, 'Confidence');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setConfidence($value)
    {
        $this->Confidence = self::_int($value);
    }

    /**
     * @return NameValueRelationshipType[]|NameValueRelationshipType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getRelationship($index = null)
    {
        return $this->_dc($index === null
            ? $this->Relationship
            : (count($this->Relationship) > $index
                ? $this->Relationship[$index]
                : null), 'Relationship');
    }

    /**
     * @param NameValueRelationshipType|null|NameValueRelationshipType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setRelationship($value, $index = null)
    {
        if ($index === null) {
            $this->Relationship = $value;
        } else {
            $this->Relationship[$index] = [];
            
            foreach ($value as $item) {
                $this->addRelationship($item);
            }
        }
    }

    /**
     * @param NameValueRelationshipType|null $value
     * @return void
     */
    public function addRelationship($value)
    {
        $this->Relationship[] = $value;
    }

    /**
     * @return VariationPictureRuleCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVariationPicture()
    {
        return $this->_dc($this->VariationPicture);
    }

    /**
     * @param VariationPictureRuleCodeType|null $value
     * @return void
     */
    public function setVariationPicture($value)
    {
        $this->VariationPicture = $this->_enum($value, VariationPictureRuleCodeType::class);
    }

    /**
     * @return VariationSpecificsRuleCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVariationSpecifics()
    {
        return $this->_dc($this->VariationSpecifics);
    }

    /**
     * @param VariationSpecificsRuleCodeType|null $value
     * @return void
     */
    public function setVariationSpecifics($value)
    {
        $this->VariationSpecifics = $this->_enum($value, VariationSpecificsRuleCodeType::class);
    }

    /**
     * @return ValueFormatCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getValueFormat()
    {
        return $this->_dc($this->ValueFormat);
    }

    /**
     * @param ValueFormatCodeType|null $value
     * @return void
     */
    public function setValueFormat($value)
    {
        $this->ValueFormat = $this->_enum($value, ValueFormatCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ValueType' => ['type' => 'ValueTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'MinValues' => ['type' => 'int'],
            'MaxValues' => ['type' => 'int'],
            'SelectionMode' => ['type' => 'SelectionModeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'AspectUsage' => ['type' => 'AspectUsageCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'MaxValueLength' => ['type' => 'int'],
            'ProductRequired' => ['type' => 'ProductRequiredCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'UsageConstraint' => ['type' => 'UsageConstraintCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Confidence' => ['type' => 'int'],
            'Relationship' => ['type' => 'NameValueRelationshipType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'VariationPicture' => ['type' => 'VariationPictureRuleCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'VariationSpecifics' => ['type' => 'VariationSpecificsRuleCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ValueFormat' => ['type' => 'ValueFormatCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

RecommendationValidationRulesType::_register();
