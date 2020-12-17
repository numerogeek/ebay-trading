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
 * This type is used to provide details about recommended Item Specifics and Product Identifier types.
 **/
class RecommendationsType extends EbatNs_ComplexType
{
    const TAG = 'RecommendationsType';
    const NAME = 'RecommendationsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $CategoryID = null;

    /**
     * @var ProductIdentifiersType[]|null
     */
    protected $ProductIdentifiers = [];

    /**
     * @var NameRecommendationType[]|null
     */
    protected $NameRecommendation = [];

    /**
     * @var bool|null "true" or "false"
     */
    protected $Updated = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategoryID()
    {
        return $this->_dc($this->CategoryID, 'CategoryID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCategoryID($value)
    {
        $this->CategoryID = self::_string($value);
    }

    /**
     * @return ProductIdentifiersType[]|ProductIdentifiersType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getProductIdentifiers($index = null)
    {
        return $this->_dc($index === null
            ? $this->ProductIdentifiers
            : (count($this->ProductIdentifiers) > $index
                ? $this->ProductIdentifiers[$index]
                : null), 'ProductIdentifiers');
    }

    /**
     * @param ProductIdentifiersType|null|ProductIdentifiersType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setProductIdentifiers($value, $index = null)
    {
        if ($index === null) {
            $this->ProductIdentifiers = $value;
        } else {
            $this->ProductIdentifiers[$index] = [];
            
            foreach ($value as $item) {
                $this->addProductIdentifiers($item);
            }
        }
    }

    /**
     * @param ProductIdentifiersType|null $value
     * @return void
     */
    public function addProductIdentifiers($value)
    {
        $this->ProductIdentifiers[] = $value;
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
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUpdated()
    {
        return $this->_dc($this->Updated === 'true', 'Updated');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setUpdated($value)
    {
        $this->Updated = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CategoryID' => [],
            'ProductIdentifiers' => ['type' => 'ProductIdentifiersType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'NameRecommendation' => ['type' => 'NameRecommendationType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'Updated' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

RecommendationsType::_register();
