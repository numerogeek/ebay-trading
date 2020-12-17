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
 * This is the base request type for the
 * GetCategorySpecifics
 * call. This call is used to retrieve required, recommended, and optional Item Specifics names and values for one
 * or multiple eBay Categories.
 **/
class GetCategorySpecificsRequestType extends AbstractRequestType
{
    const TAG = 'GetCategorySpecificsRequest';
    const NAME = 'GetCategorySpecificsRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetCategorySpecifics';

    /**
     * @var string[]|null
     */
    protected $CategoryID = [];

    /**
     * @var string|null
     */
    protected $LastUpdateTime = null;

    /**
     * @var int|null
     */
    protected $MaxNames = null;

    /**
     * @var int|null
     */
    protected $MaxValuesPerName = null;

    /**
     * @var string|null
     */
    protected $Name = null;

    /**
     * @var CategoryItemSpecificsType[]|null
     */
    protected $CategorySpecific = [];

    /**
     * @var bool|null "true" or "false"
     */
    protected $ExcludeRelationships = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeConfidence = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $CategorySpecificsFileInfo = null;


    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getCategoryID($index = null)
    {
        return $this->_dc($index === null
            ? $this->CategoryID
            : (count($this->CategoryID) > $index
                ? $this->CategoryID[$index]
                : null), 'CategoryID');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setCategoryID($value, $index = null)
    {
        if ($index === null) {
            $this->CategoryID = $value;
        } else {
            $this->CategoryID[$index] = [];
            
            foreach ($value as $item) {
                $this->addCategoryID($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addCategoryID($value)
    {
        $this->CategoryID[] = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLastUpdateTime()
    {
        return $this->_dc($this->LastUpdateTime, 'LastUpdateTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setLastUpdateTime($value)
    {
        $this->LastUpdateTime = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxNames()
    {
        return $this->_dc($this->MaxNames, 'MaxNames');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMaxNames($value)
    {
        $this->MaxNames = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxValuesPerName()
    {
        return $this->_dc($this->MaxValuesPerName, 'MaxValuesPerName');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMaxValuesPerName($value)
    {
        $this->MaxValuesPerName = self::_int($value);
    }

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
     * @return CategoryItemSpecificsType[]|CategoryItemSpecificsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getCategorySpecific($index = null)
    {
        return $this->_dc($index === null
            ? $this->CategorySpecific
            : (count($this->CategorySpecific) > $index
                ? $this->CategorySpecific[$index]
                : null), 'CategorySpecific');
    }

    /**
     * @param CategoryItemSpecificsType|null|CategoryItemSpecificsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setCategorySpecific($value, $index = null)
    {
        if ($index === null) {
            $this->CategorySpecific = $value;
        } else {
            $this->CategorySpecific[$index] = [];
            
            foreach ($value as $item) {
                $this->addCategorySpecific($item);
            }
        }
    }

    /**
     * @param CategoryItemSpecificsType|null $value
     * @return void
     */
    public function addCategorySpecific($value)
    {
        $this->CategorySpecific[] = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExcludeRelationships()
    {
        return $this->_dc($this->ExcludeRelationships === 'true', 'ExcludeRelationships');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setExcludeRelationships($value)
    {
        $this->ExcludeRelationships = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeConfidence()
    {
        return $this->_dc($this->IncludeConfidence === 'true', 'IncludeConfidence');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeConfidence($value)
    {
        $this->IncludeConfidence = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategorySpecificsFileInfo()
    {
        return $this->_dc($this->CategorySpecificsFileInfo === 'true', 'CategorySpecificsFileInfo');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setCategorySpecificsFileInfo($value)
    {
        $this->CategorySpecificsFileInfo = self::_bool($value);
    }

    /**
     * @return GetCategorySpecificsResponseType|EbatNs_ResponseError
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
            'CategoryID' => ['cardinality' => '0..*'],
            'LastUpdateTime' => [],
            'MaxNames' => ['type' => 'int'],
            'MaxValuesPerName' => ['type' => 'int'],
            'Name' => [],
            'CategorySpecific' => ['type' => 'CategoryItemSpecificsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ExcludeRelationships' => ['type' => 'bool'],
            'IncludeConfidence' => ['type' => 'bool'],
            'CategorySpecificsFileInfo' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetCategorySpecificsRequestType::_register();
