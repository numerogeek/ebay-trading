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
 * Identifies the type of listing as an attribute on the
 * ListingDuration
 * node.
 **/
class ListingDurationReferenceType extends EbatNs_SimpleType
{
    const TAG = 'ListingDurationReferenceType';
    const NAME = 'ListingDurationReferenceType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $_value = null;


    /**
     * @param int|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value, '_value');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes(['type' => ['type' => 'ListingTypeCodeType']]);
    }

}

ListingDurationReferenceType::_register();
