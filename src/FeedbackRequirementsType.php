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

class FeedbackRequirementsType extends EbatNs_SimpleType
{
    const TAG = 'FeedbackRequirementsType';
    const NAME = 'FeedbackRequirementsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $_value = null;


    /**
     * @param bool|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value === 'true', '_value');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes(['minimum' => ['type' => 'string']]);
    }

}

FeedbackRequirementsType::_register();
