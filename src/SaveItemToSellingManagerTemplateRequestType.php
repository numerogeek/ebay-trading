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
 * Creates a Selling Manager template based on an existing eBay listing.
 * This call is subject to change without notice; the
 * deprecation process is inapplicable to this call. The user must have a Selling Manager Pro subscription to
 * use this call.
 **/
class SaveItemToSellingManagerTemplateRequestType extends AbstractRequestType
{
    const TAG = 'SaveItemToSellingManagerTemplateRequest';
    const NAME = 'SaveItemToSellingManagerTemplateRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'SaveItemToSellingManagerTemplate';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var int|null
     */
    protected $ProductID = null;

    /**
     * @var string|null
     */
    protected $TemplateName = null;


    /**
     * @return ItemIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemID()
    {
        return $this->_dc($this->ItemID, 'ItemID');
    }

    /**
     * @param ItemIDType|null $value
     * @return void
     */
    public function setItemID($value)
    {
        $this->ItemID = $value;
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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTemplateName()
    {
        return $this->_dc($this->TemplateName, 'TemplateName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTemplateName($value)
    {
        $this->TemplateName = self::_string($value);
    }

    /**
     * @return SaveItemToSellingManagerTemplateResponseType|EbatNs_ResponseError
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
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'ProductID' => ['type' => 'int'],
            'TemplateName' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SaveItemToSellingManagerTemplateRequestType::_register();
