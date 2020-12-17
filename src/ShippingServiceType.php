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
 * This enumerated type defines the possible values that can be used in the
 * ShippingServiceType
 * field of the
 * ShippingServiceCostOverride
 * container.
 **/
class ShippingServiceType extends EbatNs_EnumType
{
    const TAG = 'ShippingServiceType';
    const NAME = 'ShippingServiceType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value should be used if the seller is overriding shipping costs for all domestic shipping services defined
     * in the Business Policies shipping profile.
     **/
    const CodeType_Domestic = 'Domestic';

    /**
     * This value should be used if the seller is overriding shipping costs for all international shipping services
     * defined in the Business Policies shipping profile.
     **/
    const CodeType_International = 'International';
    
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
     * @return ShippingServiceType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ShippingServiceType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isDomestic()
    {
        return $this->_value === self::CodeType_Domestic;
    }

    /**
     * @return bool
     */
    public function isInternational()
    {
        return $this->_value === self::CodeType_International;
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

ShippingServiceType::_register();
