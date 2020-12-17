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
 * Specifies the type of auto relist that will be performed.
 **/
class SellingManagerAutoRelistTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'SellingManagerAutoRelistTypeCodeType';
    const NAME = 'SellingManagerAutoRelistTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * If the item is unsold, relist the item once.
     **/
    const CodeType_RelistOnceIfNotSold = 'RelistOnceIfNotSold';

    /**
     * Relist the item continuously, until it is sold.
     **/
    const CodeType_RelistContinuouslyUntilSold = 'RelistContinuouslyUntilSold';

    /**
     * Relist the item continuously.
     **/
    const CodeType_RelistContinuously = 'RelistContinuously';

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
     * @return SellingManagerAutoRelistTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SellingManagerAutoRelistTypeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isRelistOnceIfNotSold()
    {
        return $this->_value === self::CodeType_RelistOnceIfNotSold;
    }

    /**
     * @return bool
     */
    public function isRelistContinuouslyUntilSold()
    {
        return $this->_value === self::CodeType_RelistContinuouslyUntilSold;
    }

    /**
     * @return bool
     */
    public function isRelistContinuously()
    {
        return $this->_value === self::CodeType_RelistContinuously;
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

SellingManagerAutoRelistTypeCodeType::_register();
