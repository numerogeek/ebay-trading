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
 * The base response of the
 * GetStoreCustomPage
 * call.
 **/
class GetStoreCustomPageResponseType extends EbatNs_Response
{
    const TAG = 'GetStoreCustomPageResponseType';
    const NAME = 'GetStoreCustomPageResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var StoreCustomPageArrayType|null
     */
    protected $CustomPageArray = null;


    /**
     * @return StoreCustomPageArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCustomPageArray()
    {
        return $this->_dc($this->CustomPageArray, 'CustomPageArray');
    }

    /**
     * @param StoreCustomPageArrayType|null $value
     * @return void
     */
    public function setCustomPageArray($value)
    {
        $this->CustomPageArray = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['CustomPageArray' => ['type' => 'StoreCustomPageArrayType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

GetStoreCustomPageResponseType::_register();
