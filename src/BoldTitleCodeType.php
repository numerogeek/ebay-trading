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
 * This enumerated type contains the possible values that can be returned in the
 * ListingFeatureDetails.BoldTitle
 * field to indicate whether or not bold listing titles are supported by the eBay site specified in the
 * GeteBayDetails
 * call request.
 **/
class BoldTitleCodeType extends EbatNs_EnumType
{
    const TAG = 'BoldTitleCodeType';
    const NAME = 'BoldTitleCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that bold listing titles are enabled for the eBay site specified in the
     * GeteBayDetails
     * call request.
     **/
    const CodeType_Enabled = 'Enabled';

    /**
     * This value indicates that bold listing titles are disabled for the eBay site specified in the
     * GeteBayDetails
     * call request.
     **/
    const CodeType_Disabled = 'Disabled';

    /**
     * Reserved for future use.
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
     * @return BoldTitleCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param BoldTitleCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->_value === self::CodeType_Enabled;
    }

    /**
     * @return bool
     */
    public function isDisabled()
    {
        return $this->_value === self::CodeType_Disabled;
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

BoldTitleCodeType::_register();
