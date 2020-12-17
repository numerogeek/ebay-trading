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
 * This enumerated type contains the different subscription levels that a seller may subscribe to for their eBay
 * Store. There is also one enumeration value (<code>Close</code>) that allows a seller to cancel their current eBay
 * Store subscription with a
 * SetStore
 * call.
 **/
class StoreSubscriptionLevelCodeType extends EbatNs_EnumType
{
    const TAG = 'StoreSubscriptionLevelCodeType';
    const NAME = 'StoreSubscriptionLevelCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is passed into the
     * Store.SubscriptionLevel
     * field of a
     * SetStore
     * call to cancel your current eBay Store subscription. Despite its name, this action does not close your store
     * immediately. Any active listings will remain available through your eBay Store until those listings have ended
     * (either through a sale or when listing end time has been reached).
     **/
    const CodeType_Close = 'Close';

    /**
     * This enumeration value indicates that the eBay user has a Basic eBay Store subscription.
     **/
    const CodeType_Basic = 'Basic';

    /**
     * This enumeration value indicates that the eBay user has a Premium eBay Store subscription.
     **/
    const CodeType_Featured = 'Featured';

    /**
     * This enumeration value indicates that the eBay user has an Anchor eBay Store subscription.
     **/
    const CodeType_Anchor = 'Anchor';

    /**
     * This enumeration value indicates that the eBay user has a Starter eBay Store subscription.
     **/
    const CodeType_Starter = 'Starter';

    /**
     * This enumeration value indicates that the eBay user has an Enterprise eBay Store subscription.
     **/
    const CodeType_Enterprise = 'Enterprise';

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
     * @return StoreSubscriptionLevelCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param StoreSubscriptionLevelCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isClose()
    {
        return $this->_value === self::CodeType_Close;
    }

    /**
     * @return bool
     */
    public function isBasic()
    {
        return $this->_value === self::CodeType_Basic;
    }

    /**
     * @return bool
     */
    public function isFeatured()
    {
        return $this->_value === self::CodeType_Featured;
    }

    /**
     * @return bool
     */
    public function isAnchor()
    {
        return $this->_value === self::CodeType_Anchor;
    }

    /**
     * @return bool
     */
    public function isStarter()
    {
        return $this->_value === self::CodeType_Starter;
    }

    /**
     * @return bool
     */
    public function isEnterprise()
    {
        return $this->_value === self::CodeType_Enterprise;
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

StoreSubscriptionLevelCodeType::_register();
