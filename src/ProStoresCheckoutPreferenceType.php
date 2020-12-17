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
 * This type is deprecated.
 **/
class ProStoresCheckoutPreferenceType extends EbatNs_ComplexType
{
    const TAG = 'ProStoresCheckoutPreferenceType';
    const NAME = 'ProStoresCheckoutPreferenceType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $CheckoutRedirectProStores = null;

    /**
     * @var ProStoresDetailsType|null
     */
    protected $ProStoresDetails = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCheckoutRedirectProStores()
    {
        return $this->_dc($this->CheckoutRedirectProStores === 'true', 'CheckoutRedirectProStores');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setCheckoutRedirectProStores($value)
    {
        $this->CheckoutRedirectProStores = self::_bool($value);
    }

    /**
     * @return ProStoresDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProStoresDetails()
    {
        return $this->_dc($this->ProStoresDetails, 'ProStoresDetails');
    }

    /**
     * @param ProStoresDetailsType|null $value
     * @return void
     */
    public function setProStoresDetails($value)
    {
        $this->ProStoresDetails = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CheckoutRedirectProStores' => ['type' => 'bool'],
            'ProStoresDetails' => ['type' => 'ProStoresDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..0']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ProStoresCheckoutPreferenceType::_register();
