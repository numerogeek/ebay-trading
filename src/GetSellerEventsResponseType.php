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
 * Returns the items in an
 * ItemArrayType
 * object for the a seller events that have occurred and that meet any filters specified. There can be zero, one,
 * or multiple
 * ItemType
 * objects. Each
 * ItemType
 * object contains the detail data for one item listing.
 **/
class GetSellerEventsResponseType extends EbatNs_Response
{
    const TAG = 'GetSellerEventsResponseType';
    const NAME = 'GetSellerEventsResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $TimeTo = null;

    /**
     * @var ItemArrayType|null
     */
    protected $ItemArray = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTimeTo()
    {
        return $this->_dc($this->TimeTo, 'TimeTo');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTimeTo($value)
    {
        $this->TimeTo = self::_string($value);
    }

    /**
     * @return ItemArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemArray()
    {
        return $this->_dc($this->ItemArray, 'ItemArray');
    }

    /**
     * @param ItemArrayType|null $value
     * @return void
     */
    public function setItemArray($value)
    {
        $this->ItemArray = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'TimeTo' => [],
            'ItemArray' => ['type' => 'ItemArrayType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetSellerEventsResponseType::_register();
