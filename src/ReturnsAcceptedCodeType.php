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
 * This enum defines the different options that are available for specifying whether or not the seller accepts
 * returns.
 **/
class ReturnsAcceptedCodeType extends EbatNs_EnumType
{
    const TAG = 'ReturnsAcceptedCodeType';
    const NAME = 'ReturnsAcceptedCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * <code>ReturnsAccepted</code> indicates the seller does accept returns.
     **/
    const CodeType_ReturnsAccepted = 'ReturnsAccepted';

    /**
     * <code>ReturnsNotAccepted</code> indicates the seller does <i>not</i> accept returns.
     **/
    const CodeType_ReturnsNotAccepted = 'ReturnsNotAccepted';
    
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
     * @return ReturnsAcceptedCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ReturnsAcceptedCodeType|null $value
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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

ReturnsAcceptedCodeType::_register();
