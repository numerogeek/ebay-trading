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
 * This is the base request type of the
 * AddItemFromSellingManagerTemplate
 * call, which is used to create listings based on settings contained in a Selling Manager template.
 **/
class AddItemFromSellingManagerTemplateRequestType extends AbstractRequestType
{
    const TAG = 'AddItemFromSellingManagerTemplateRequest';
    const NAME = 'AddItemFromSellingManagerTemplateRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'AddItemFromSellingManagerTemplate';

    /**
     * @var int|null
     */
    protected $SaleTemplateID = null;

    /**
     * @var string|null
     */
    protected $ScheduleTime = null;

    /**
     * @var ItemType|null
     */
    protected $Item = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSaleTemplateID()
    {
        return $this->_dc($this->SaleTemplateID, 'SaleTemplateID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setSaleTemplateID($value)
    {
        $this->SaleTemplateID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getScheduleTime()
    {
        return $this->_dc($this->ScheduleTime, 'ScheduleTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setScheduleTime($value)
    {
        $this->ScheduleTime = self::_string($value);
    }

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
     * @return AddItemFromSellingManagerTemplateResponseType|EbatNs_ResponseError
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
            'SaleTemplateID' => ['type' => 'int'],
            'ScheduleTime' => [],
            'Item' => ['type' => 'ItemType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AddItemFromSellingManagerTemplateRequestType::_register();
