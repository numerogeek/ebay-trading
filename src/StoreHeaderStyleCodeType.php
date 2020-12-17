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

class StoreHeaderStyleCodeType extends EbatNs_EnumType
{
    const TAG = 'StoreHeaderStyleCodeType';
    const NAME = 'StoreHeaderStyleCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * The full Store header is used.
     **/
    const CodeType_Full = 'Full';

    /**
     * A minimized Store header is used.
     **/
    const CodeType_Minimized = 'Minimized';

    /**
     * (out) Reserved for internal or future use.
     **/
    const CodeType_CustomCode = 'CustomCode';
    
    /**
     * @var string|null
     */
    protected $_value = null;


    /**
     * @param string|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return StoreHeaderStyleCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param StoreHeaderStyleCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isFull()
    {
        return $this->_value === self::CodeType_Full;
    }

    /**
     * @return bool
     */
    public function isMinimized()
    {
        return $this->_value === self::CodeType_Minimized;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

StoreHeaderStyleCodeType::_register();
