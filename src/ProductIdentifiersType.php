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
 * <span class="tablenote"><strong>Note:</strong>
 * This type and the
 * ProductIdentifiers
 * container were originally introduced into the Trading schema with the intention of separating Global Trade Item
 * Numbers (GTINs) and other descriptive item specifics, but the
 * ProductIdentifiers
 * container was never wired on/returned in
 * GetCategorySpecifics
 * . Instead, users will still find one or more relevant GTIN types under a
 * Recommendations.NameRecommendation.Name
 * field in the
 * GetCategorySpecifics
 * response.
 * </span>
 **/
class ProductIdentifiersType extends EbatNs_ComplexType
{
    const TAG = 'ProductIdentifiersType';
    const NAME = 'ProductIdentifiersType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var GroupValidationRulesType|null
     */
    protected $ValidationRules = null;

    /**
     * @var NameRecommendationType[]|null
     */
    protected $NameRecommendation = [];


    /**
     * @return GroupValidationRulesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getValidationRules()
    {
        return $this->_dc($this->ValidationRules, 'ValidationRules');
    }

    /**
     * @param GroupValidationRulesType|null $value
     * @return void
     */
    public function setValidationRules($value)
    {
        $this->ValidationRules = $value;
    }

    /**
     * @return NameRecommendationType[]|NameRecommendationType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getNameRecommendation($index = null)
    {
        return $this->_dc($index === null
            ? $this->NameRecommendation
            : (count($this->NameRecommendation) > $index
                ? $this->NameRecommendation[$index]
                : null), 'NameRecommendation');
    }

    /**
     * @param NameRecommendationType|null|NameRecommendationType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setNameRecommendation($value, $index = null)
    {
        if ($index === null) {
            $this->NameRecommendation = $value;
        } else {
            $this->NameRecommendation[$index] = [];
            
            foreach ($value as $item) {
                $this->addNameRecommendation($item);
            }
        }
    }

    /**
     * @param NameRecommendationType|null $value
     * @return void
     */
    public function addNameRecommendation($value)
    {
        $this->NameRecommendation[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ValidationRules' => ['type' => 'GroupValidationRulesType', 'xmlns' => self::XMLNS],
            'NameRecommendation' => ['type' => 'NameRecommendationType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ProductIdentifiersType::_register();
