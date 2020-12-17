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
 * Enumerated type this is used to indicate the type of user that initiated a monetary transaction.
 **/
class UserIdentityCodeType extends EbatNs_EnumType
{
    const TAG = 'UserIdentityCodeType';
    const NAME = 'UserIdentityCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that an eBay user initiated the monetary transaction.
     **/
    const CodeType_eBayUser = 'eBayUser';

    /**
     * This enumeration value indicates that an eBay partner (such as Pitney Bowes) initiated the monetary transaction.
     **/
    const CodeType_eBayPartner = 'eBayPartner';

    /**
     * This value is reserved for future use.
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
     * @return UserIdentityCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param UserIdentityCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isEBayUser()
    {
        return $this->_value === self::CodeType_eBayUser;
    }

    /**
     * @return bool
     */
    public function isEBayPartner()
    {
        return $this->_value === self::CodeType_eBayPartner;
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

UserIdentityCodeType::_register();
