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
 * Specified whether returns are accepted.
 **/
class ReturnsAcceptedOptionsCodeType extends EbatNs_EnumType
{
    const TAG = 'ReturnsAcceptedOptionsCodeType';
    const NAME = 'ReturnsAcceptedOptionsCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * The seller accepts returns, subject to other details
     * specified in the policy.
     **/
    const CodeType_ReturnsAccepted = 'ReturnsAccepted';

    /**
     * The seller does not accept returns.
     **/
    const CodeType_ReturnsNotAccepted = 'ReturnsNotAccepted';

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
     * @return ReturnsAcceptedOptionsCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ReturnsAcceptedOptionsCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isReturnsAccepted()
    {
        return $this->_value === self::CodeType_ReturnsAccepted;
    }

    /**
     * @return bool
     */
    public function isReturnsNotAccepted()
    {
        return $this->_value === self::CodeType_ReturnsNotAccepted;
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

ReturnsAcceptedOptionsCodeType::_register();
