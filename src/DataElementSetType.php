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
 * This type is deprecated.
 **/
class DataElementSetType extends EbatNs_ComplexType
{
    const TAG = 'DataElementSetType';
    const NAME = 'DataElementSetType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $DataElement = null;

    /**
     * @var int|null
     */
    protected $DataElementID = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDataElement()
    {
        return $this->_dc($this->DataElement, 'DataElement');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDataElement($value)
    {
        $this->DataElement = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDataElementID()
    {
        return $this->_dc($this->DataElementID, 'DataElementID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setDataElementID($value)
    {
        $this->DataElementID = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'DataElement' => [],
            'DataElementID' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes(['attributeSetID' => ['type' => 'int']]);
    }

}

DataElementSetType::_register();
