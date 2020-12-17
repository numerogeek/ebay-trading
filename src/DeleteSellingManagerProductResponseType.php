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
 * Response for deleting a Selling Manager product.
 **/
class DeleteSellingManagerProductResponseType extends EbatNs_Response
{
    const TAG = 'DeleteSellingManagerProductResponseType';
    const NAME = 'DeleteSellingManagerProductResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SellingManagerProductDetailsType|null
     */
    protected $DeletedSellingManagerProductDetails = null;


    /**
     * @return SellingManagerProductDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDeletedSellingManagerProductDetails()
    {
        return $this->_dc($this->DeletedSellingManagerProductDetails, 'DeletedSellingManagerProductDetails');
    }

    /**
     * @param SellingManagerProductDetailsType|null $value
     * @return void
     */
    public function setDeletedSellingManagerProductDetails($value)
    {
        $this->DeletedSellingManagerProductDetails = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['DeletedSellingManagerProductDetails' => ['type' => 'SellingManagerProductDetailsType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

DeleteSellingManagerProductResponseType::_register();
