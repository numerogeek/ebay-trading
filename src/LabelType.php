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
class LabelType extends EbatNs_ComplexType
{
    const TAG = 'LabelType';
    const NAME = 'LabelType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Name = null;


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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Name' => []], parent::NAME);
        self::assignAttributes(['visible' => ['type' => 'boolean']]);
    }

}

LabelType::_register();
