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
 * Information about a parent name-value pair that indicates the
 * relationships between    Item Specifics.
 **/
class NameValueRelationshipType extends EbatNs_ComplexType
{
    const TAG = 'NameValueRelationshipType';
    const NAME = 'NameValueRelationshipType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $ParentName = null;

    /**
     * @var string|null
     */
    protected $ParentValue = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getParentName()
    {
        return $this->_dc($this->ParentName, 'ParentName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setParentName($value)
    {
        $this->ParentName = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getParentValue()
    {
        return $this->_dc($this->ParentValue, 'ParentValue');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setParentValue($value)
    {
        $this->ParentValue = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ParentName' => [],
            'ParentValue' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

NameValueRelationshipType::_register();
