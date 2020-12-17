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
 * This enum defines the different options that are available for specifying the return shipment payee.
 **/
class ReturnsShipmentPayeeCodeType extends EbatNs_EnumType
{
    const TAG = 'ReturnsShipmentPayeeCodeType';
    const NAME = 'ReturnsShipmentPayeeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * <code>Buyer</code> indicates the buyer is responsible for paying for the return shipping.
     **/
    const CodeType_Buyer = 'Buyer';

    /**
     * <code>Seller</code> indicates the seller is responsible for paying for the return shipping.
     **/
    const CodeType_Seller = 'Seller';
    
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
     * @return ReturnsShipmentPayeeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ReturnsShipmentPayeeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isBuyer()
    {
        return $this->_value === self::CodeType_Buyer;
    }

    /**
     * @return bool
     */
    public function isSeller()
    {
        return $this->_value === self::CodeType_Seller;
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

ReturnsShipmentPayeeCodeType::_register();
