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
 * This call allows a seller to create and publish a fixed-price listing.
 * The main difference between
 * AddFixedPriceItem
 * and
 * AddItem
 * is that
 * 
 * AddFixedPriceItem
 * supports the creation of fixed-price listings only,
 * whereas
 * AddItem
 * supports all listing formats.
 * 
 * 
 * Also, only
 * AddFixedPriceItem
 * supports multiple-variation listings
 * and tracking inventory by a seller-defined SKU value.
 * AddItem
 * does not support
 * Variations or the
 * InventoryTrackingMethod
 * field.
 **/
class AddFixedPriceItemRequestType extends AbstractRequestType
{
    const TAG = 'AddFixedPriceItemRequest';
    const NAME = 'AddFixedPriceItemRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'AddFixedPriceItem';

    /**
     * @var ItemType|null
     */
    protected $Item = null;


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
     * @return AddFixedPriceItemResponseType|EbatNs_ResponseError
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
        self::assignElements(['Item' => ['type' => 'ItemType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

AddFixedPriceItemRequestType::_register();
