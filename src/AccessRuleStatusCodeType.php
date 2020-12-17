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
 * This enumerated type contains values that describe an application's current status
 * with respect to an API access rule.
 **/
class AccessRuleStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'AccessRuleStatusCodeType';
    const NAME = 'AccessRuleStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the rule is turned off, and no rule validation
     * was performed.
     **/
    const CodeType_RuleOff = 'RuleOff';

    /**
     * This value indicates that the rule is turned on, and rule validation was
     * performed.
     **/
    const CodeType_RuleOn = 'RuleOn';

    /**
     * This value indicates that the application is blocked from making
     * requests to the call named in this rule.
     **/
    const CodeType_ApplicationBlocked = 'ApplicationBlocked';

    /**
     * Reserved for internal or future use.
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
     * @return AccessRuleStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param AccessRuleStatusCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isRuleOff()
    {
        return $this->_value === self::CodeType_RuleOff;
    }

    /**
     * @return bool
     */
    public function isRuleOn()
    {
        return $this->_value === self::CodeType_RuleOn;
    }

    /**
     * @return bool
     */
    public function isApplicationBlocked()
    {
        return $this->_value === self::CodeType_ApplicationBlocked;
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

AccessRuleStatusCodeType::_register();
