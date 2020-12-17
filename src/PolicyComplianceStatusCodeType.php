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
 * This enumerated type is deprecated.
 **/
class PolicyComplianceStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'PolicyComplianceStatusCodeType';
    const NAME = 'PolicyComplianceStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is not used.
     **/
    const CodeType_Good = 'Good';

    /**
     * This value is not used.
     **/
    const CodeType_Fair = 'Fair';

    /**
     * This value is not used.
     **/
    const CodeType_Poor = 'Poor';

    /**
     * This value is not used.
     **/
    const CodeType_Failing = 'Failing';

    /**
     * This value is not used.
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
     * @return PolicyComplianceStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PolicyComplianceStatusCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isGood()
    {
        return $this->_value === self::CodeType_Good;
    }

    /**
     * @return bool
     */
    public function isFair()
    {
        return $this->_value === self::CodeType_Fair;
    }

    /**
     * @return bool
     */
    public function isPoor()
    {
        return $this->_value === self::CodeType_Poor;
    }

    /**
     * @return bool
     */
    public function isFailing()
    {
        return $this->_value === self::CodeType_Failing;
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

PolicyComplianceStatusCodeType::_register();
