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
 * This enumeration type is used to indicate the type of logo that will be included in the customized email that
 * will be sent by the seller to the winning bidder in an auction listing.
 **/
class EndOfAuctionLogoTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'EndOfAuctionLogoTypeCodeType';
    const NAME = 'EndOfAuctionLogoTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that the PayPal Winning Bidder Notice logo will be used in the end of auction
     * email to winning bidder.
     **/
    const CodeType_WinningBidderNotice = 'WinningBidderNotice';

    /**
     * This enumeration value indicates that the eBay seller's Store logo will be used in the end of auction email to
     * winning bidder.
     **/
    const CodeType_Store = 'Store';

    /**
     * This enumeration value indicates that a custom logo will be used in the end of auction email to winning bidder.
     * The location (URL) of this custom logo is specified in the
     * LogoURL
     * field.
     **/
    const CodeType_Customized = 'Customized';

    /**
     * Reserved for internal or future use.
     **/
    const CodeType_CustomCode = 'CustomCode';

    /**
     * This enumeration value indicates that no logo will be used in the end of auction email to winning bidder.
     **/
    const CodeType_None = 'None';
    
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
     * @return EndOfAuctionLogoTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param EndOfAuctionLogoTypeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isWinningBidderNotice()
    {
        return $this->_value === self::CodeType_WinningBidderNotice;
    }

    /**
     * @return bool
     */
    public function isStore()
    {
        return $this->_value === self::CodeType_Store;
    }

    /**
     * @return bool
     */
    public function isCustomized()
    {
        return $this->_value === self::CodeType_Customized;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }

    /**
     * @return bool
     */
    public function isNone()
    {
        return $this->_value === self::CodeType_None;
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

EndOfAuctionLogoTypeCodeType::_register();
