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
 * SaveItemToSellingManagerTemplate
 * call. A successful call will return a
 * TemplateID
 * value for the newly-created Selling Manager template.
 **/
class SaveItemToSellingManagerTemplateResponseType extends EbatNs_Response
{
    const TAG = 'SaveItemToSellingManagerTemplateResponseType';
    const NAME = 'SaveItemToSellingManagerTemplateResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $TemplateID = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTemplateID()
    {
        return $this->_dc($this->TemplateID, 'TemplateID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setTemplateID($value)
    {
        $this->TemplateID = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['TemplateID' => ['type' => 'int']], parent::NAME);
        self::assignAttributes([]);
    }

}

SaveItemToSellingManagerTemplateResponseType::_register();
