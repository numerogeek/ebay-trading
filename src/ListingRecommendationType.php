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
 * Type defining the
 * Recommendation
 * container(s) that are
 * conditionally returned in all Add/Revise/Relist/Verify API calls.
 * Each
 * Recommendation
 * container provides a message to the seller on
 * how a listing can be improved or brought up to standard in regards to top-rated seller/listing requirements,
 * mandated or recommended Item Specifics, picture quality requirements, pricing and/or listing format
 * recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to use Fast 'N
 * Free shipping.
 * 
 * One or more
 * Recommendation
 * containers can be returned for each
 * listing.
 **/
class ListingRecommendationType extends EbatNs_ComplexType
{
    const TAG = 'ListingRecommendationType';
    const NAME = 'ListingRecommendationType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Type = null;

    /**
     * @var string|null
     */
    protected $Group = null;

    /**
     * @var string|null
     */
    protected $FieldName = null;

    /**
     * @var string|null
     */
    protected $Code = null;

    /**
     * @var string[]|null
     */
    protected $Value = [];

    /**
     * @var string|null
     */
    protected $Message = null;

    /**
     * @var MetadataType[]|null
     */
    protected $Metadata = [];


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getType()
    {
        return $this->_dc($this->Type, 'Type');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setType($value)
    {
        $this->Type = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGroup()
    {
        return $this->_dc($this->Group, 'Group');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setGroup($value)
    {
        $this->Group = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFieldName()
    {
        return $this->_dc($this->FieldName, 'FieldName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setFieldName($value)
    {
        $this->FieldName = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCode()
    {
        return $this->_dc($this->Code, 'Code');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCode($value)
    {
        $this->Code = self::_string($value);
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getValue($index = null)
    {
        return $this->_dc($index === null
            ? $this->Value
            : (count($this->Value) > $index
                ? $this->Value[$index]
                : null), 'Value');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setValue($value, $index = null)
    {
        if ($index === null) {
            $this->Value = $value;
        } else {
            $this->Value[$index] = [];
            
            foreach ($value as $item) {
                $this->addValue($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addValue($value)
    {
        $this->Value[] = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMessage()
    {
        return $this->_dc($this->Message, 'Message');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMessage($value)
    {
        $this->Message = self::_string($value);
    }

    /**
     * @return MetadataType[]|MetadataType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getMetadata($index = null)
    {
        return $this->_dc($index === null
            ? $this->Metadata
            : (count($this->Metadata) > $index
                ? $this->Metadata[$index]
                : null), 'Metadata');
    }

    /**
     * @param MetadataType|null|MetadataType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setMetadata($value, $index = null)
    {
        if ($index === null) {
            $this->Metadata = $value;
        } else {
            $this->Metadata[$index] = [];
            
            foreach ($value as $item) {
                $this->addMetadata($item);
            }
        }
    }

    /**
     * @param MetadataType|null $value
     * @return void
     */
    public function addMetadata($value)
    {
        $this->Metadata[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Type' => [],
            'Group' => [],
            'FieldName' => [],
            'Code' => [],
            'Value' => ['cardinality' => '0..*'],
            'Message' => [],
            'Metadata' => ['type' => 'MetadataType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ListingRecommendationType::_register();
