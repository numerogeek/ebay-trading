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
 * This enumerated type defines the special price treatments that can be set up for listings enabled with the
 * Minimum Advertised Price feature. The Minimum Advertised Price (MAP) feature is only supported on the eBay US
 * site.
 **/
class MinimumAdvertisedPriceExposureCodeType extends EbatNs_EnumType
{
    const TAG = 'MinimumAdvertisedPriceExposureCodeType';
    const NAME = 'MinimumAdvertisedPriceExposureCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that the buyer must add the item to his/her cart before the discounted price can
     * be displayed. To enable this pricing treatment when adding/revising/relisting an item, include the
     * DiscountPriceInfo.MinimumAdvertisedPriceExposure
     * field in an Add/Revise/Relist calls and set its value to <code>PreCheckout</code>.
     **/
    const CodeType_PreCheckout = 'PreCheckout';

    /**
     * This enumeration value indicates that the discounted price will only be shown to the buyer once the buyer reaches
     * the eBay Checkout page. To enable this pricing treatment when adding/revising/relisting an item, include the
     * DiscountPriceInfo.MinimumAdvertisedPriceExposure
     * field in an Add/Revise/Relist calls and set its value to <code>DuringCheckout</code>.
     **/
    const CodeType_DuringCheckout = 'DuringCheckout';

    /**
     * This enumeration value indicates that the discounted price is shown on the View Item page, and the buyer is not
     * required to add the item to his/her cart or click Buy button to view the discounted price. To enable this pricing
     * treatment when adding/revising/relisting an item, include the
     * DiscountPriceInfo.MinimumAdvertisedPriceExposure
     * field in an Add/Revise/Relist call and set its value to <code>None</code>.
     **/
    const CodeType_None = 'None';

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
     * @return MinimumAdvertisedPriceExposureCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param MinimumAdvertisedPriceExposureCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isPreCheckout()
    {
        return $this->_value === self::CodeType_PreCheckout;
    }

    /**
     * @return bool
     */
    public function isDuringCheckout()
    {
        return $this->_value === self::CodeType_DuringCheckout;
    }

    /**
     * @return bool
     */
    public function isNone()
    {
        return $this->_value === self::CodeType_None;
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

MinimumAdvertisedPriceExposureCodeType::_register();
