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
 * The base request for the
 * AddSellingManagerTemplate
 * call, which is used to create a Selling Manager listing template. Each Selling Manager listing template must be
 * associated with an existing Selling Manager product, and each product can have up to 20 listing templates
 * associated with it.
 **/
class AddSellingManagerTemplateRequestType extends AbstractRequestType
{
    const TAG = 'AddSellingManagerTemplateRequest';
    const NAME = 'AddSellingManagerTemplateRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'AddSellingManagerTemplate';

    /**
     * @var ItemType|null
     */
    protected $Item = null;

    /**
     * @var string|null
     */
    protected $SaleTemplateName = null;

    /**
     * @var int|null
     */
    protected $ProductID = null;


    /**
     * @return ItemType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItem()
    {
        return $this->_dc($this->Item, 'Item');
    }

    /**
     * @param ItemType|null $value
     * @return void
     */
    public function setItem($value)
    {
        $this->Item = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSaleTemplateName()
    {
        return $this->_dc($this->SaleTemplateName, 'SaleTemplateName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSaleTemplateName($value)
    {
        $this->SaleTemplateName = self::_string($value);
    }

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
     * @return AddSellingManagerTemplateResponseType|EbatNs_ResponseError
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
            'Item' => ['type' => 'ItemType', 'xmlns' => self::XMLNS],
            'SaleTemplateName' => [],
            'ProductID' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AddSellingManagerTemplateRequestType::_register();
