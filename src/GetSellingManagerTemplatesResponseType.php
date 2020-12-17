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
 * GetSellingManagerTemplates
 * call. A
 * SellingManagerTemplateDetails
 * container is returned for each Selling Manager Template that matches the input criteria.
 **/
class GetSellingManagerTemplatesResponseType extends EbatNs_Response
{
    const TAG = 'GetSellingManagerTemplatesResponseType';
    const NAME = 'GetSellingManagerTemplatesResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SellingManagerTemplateDetailsArrayType|null
     */
    protected $SellingManagerTemplateDetailsArray = null;


    /**
     * @return SellingManagerTemplateDetailsArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellingManagerTemplateDetailsArray()
    {
        return $this->_dc($this->SellingManagerTemplateDetailsArray, 'SellingManagerTemplateDetailsArray');
    }

    /**
     * @param SellingManagerTemplateDetailsArrayType|null $value
     * @return void
     */
    public function setSellingManagerTemplateDetailsArray($value)
    {
        $this->SellingManagerTemplateDetailsArray = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['SellingManagerTemplateDetailsArray' => ['type' => 'SellingManagerTemplateDetailsArrayType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

GetSellingManagerTemplatesResponseType::_register();
