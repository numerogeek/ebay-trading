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
 * The base request type of the
 * AddSellingManagerProduct
 * call, which is used to create a product or a group of product variations within the Selling Manager Pro system.
 * Once a Selling Manager Pro product or production variation group is created, the product settings and product
 * specifics can be transferred over into a Selling Manager Pro listing template with the
 * AddSellingManagerTemplate
 * call.
 **/
class AddSellingManagerProductRequestType extends AbstractRequestType
{
    const TAG = 'AddSellingManagerProductRequest';
    const NAME = 'AddSellingManagerProductRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'AddSellingManagerProduct';

    /**
     * @var SellingManagerProductDetailsType|null
     */
    protected $SellingManagerProductDetails = null;

    /**
     * @var int|null
     */
    protected $FolderID = null;

    /**
     * @var SellingManagerProductSpecificsType|null
     */
    protected $SellingManagerProductSpecifics = null;


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
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFolderID()
    {
        return $this->_dc($this->FolderID, 'FolderID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setFolderID($value)
    {
        $this->FolderID = self::_int($value);
    }

    /**
     * @return SellingManagerProductSpecificsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellingManagerProductSpecifics()
    {
        return $this->_dc($this->SellingManagerProductSpecifics, 'SellingManagerProductSpecifics');
    }

    /**
     * @param SellingManagerProductSpecificsType|null $value
     * @return void
     */
    public function setSellingManagerProductSpecifics($value)
    {
        $this->SellingManagerProductSpecifics = $value;
    }

    /**
     * @return AddSellingManagerProductResponseType|EbatNs_ResponseError
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
        self::assignElements([
            'SellingManagerProductDetails' => ['type' => 'SellingManagerProductDetailsType', 'xmlns' => self::XMLNS],
            'FolderID' => ['type' => 'int'],
            'SellingManagerProductSpecifics' => ['type' => 'SellingManagerProductSpecificsType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AddSellingManagerProductRequestType::_register();
