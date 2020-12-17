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
 * Response for revising a Selling Manager product.
 **/
class ReviseSellingManagerProductResponseType extends EbatNs_Response
{
    const TAG = 'ReviseSellingManagerProductResponseType';
    const NAME = 'ReviseSellingManagerProductResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SellingManagerProductDetailsType|null
     */
    protected $SellingManagerProductDetails = null;


    /**
     * @return SellingManagerProductDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellingManagerProductDetails()
    {
        return $this->_dc($this->SellingManagerProductDetails, 'SellingManagerProductDetails');
    }

    /**
     * @param SellingManagerProductDetailsType|null $value
     * @return void
     */
    public function setSellingManagerProductDetails($value)
    {
        $this->SellingManagerProductDetails = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['SellingManagerProductDetails' => ['type' => 'SellingManagerProductDetailsType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

ReviseSellingManagerProductResponseType::_register();
