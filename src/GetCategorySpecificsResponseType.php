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
 * This is the base response type for the
 * GetCategorySpecifics
 * call. This call retrieves recommended Item Specifics names and values for one or multiple eBay Categories.
 **/
class GetCategorySpecificsResponseType extends EbatNs_Response
{
    const TAG = 'GetCategorySpecificsResponseType';
    const NAME = 'GetCategorySpecificsResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var RecommendationsType[]|null
     */
    protected $Recommendations = [];

    /**
     * @var string|null
     */
    protected $TaskReferenceID = null;

    /**
     * @var string|null
     */
    protected $FileReferenceID = null;


    /**
     * @return RecommendationsType[]|RecommendationsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getRecommendations($index = null)
    {
        return $this->_dc($index === null
            ? $this->Recommendations
            : (count($this->Recommendations) > $index
                ? $this->Recommendations[$index]
                : null), 'Recommendations');
    }

    /**
     * @param RecommendationsType|null|RecommendationsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setRecommendations($value, $index = null)
    {
        if ($index === null) {
            $this->Recommendations = $value;
        } else {
            $this->Recommendations[$index] = [];
            
            foreach ($value as $item) {
                $this->addRecommendations($item);
            }
        }
    }

    /**
     * @param RecommendationsType|null $value
     * @return void
     */
    public function addRecommendations($value)
    {
        $this->Recommendations[] = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTaskReferenceID()
    {
        return $this->_dc($this->TaskReferenceID, 'TaskReferenceID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTaskReferenceID($value)
    {
        $this->TaskReferenceID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFileReferenceID()
    {
        return $this->_dc($this->FileReferenceID, 'FileReferenceID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setFileReferenceID($value)
    {
        $this->FileReferenceID = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Recommendations' => ['type' => 'RecommendationsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'TaskReferenceID' => [],
            'FileReferenceID' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetCategorySpecificsResponseType::_register();
