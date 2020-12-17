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
 * The base response for the
 * SetStoreCustomPage
 * call. This serves as
 * confirmation that the custom page was successfully submitted.
 **/
class SetStoreCustomPageResponseType extends EbatNs_Response
{
    const TAG = 'SetStoreCustomPageResponseType';
    const NAME = 'SetStoreCustomPageResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var StoreCustomPageType|null
     */
    protected $CustomPage = null;


    /**
     * @return StoreCustomPageType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCustomPage()
    {
        return $this->_dc($this->CustomPage, 'CustomPage');
    }

    /**
     * @param StoreCustomPageType|null $value
     * @return void
     */
    public function setCustomPage($value)
    {
        $this->CustomPage = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['CustomPage' => ['type' => 'StoreCustomPageType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

SetStoreCustomPageResponseType::_register();
