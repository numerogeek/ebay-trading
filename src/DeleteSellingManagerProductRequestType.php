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
 * Deletes a Selling Manager product.
 * This call is subject to change without notice; the
 * deprecation process is inapplicable to this call.
 **/
class DeleteSellingManagerProductRequestType extends AbstractRequestType
{
    const TAG = 'DeleteSellingManagerProductRequest';
    const NAME = 'DeleteSellingManagerProductRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'DeleteSellingManagerProduct';

    /**
     * @var int|null
     */
    protected $ProductID = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProductID()
    {
        return $this->_dc($this->ProductID, 'ProductID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setProductID($value)
    {
        $this->ProductID = self::_int($value);
    }

    /**
     * @return DeleteSellingManagerProductResponseType|EbatNs_ResponseError
     * @param EbatNs_Client
     **/
    function call($client)
    {
        return $client->call(self::REQUEST, $this);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['ProductID' => ['type' => 'int']], parent::NAME);
        self::assignAttributes([]);
    }

}

DeleteSellingManagerProductRequestType::_register();
