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
 * Response for deleting a Selling Manager template.
 **/
class DeleteSellingManagerTemplateResponseType extends EbatNs_Response
{
    const TAG = 'DeleteSellingManagerTemplateResponseType';
    const NAME = 'DeleteSellingManagerTemplateResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $DeletedSaleTemplateID = null;

    /**
     * @var string|null
     */
    protected $DeletedSaleTemplateName = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDeletedSaleTemplateID()
    {
        return $this->_dc($this->DeletedSaleTemplateID, 'DeletedSaleTemplateID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDeletedSaleTemplateID($value)
    {
        $this->DeletedSaleTemplateID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDeletedSaleTemplateName()
    {
        return $this->_dc($this->DeletedSaleTemplateName, 'DeletedSaleTemplateName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDeletedSaleTemplateName($value)
    {
        $this->DeletedSaleTemplateName = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'DeletedSaleTemplateID' => [],
            'DeletedSaleTemplateName' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

DeleteSellingManagerTemplateResponseType::_register();
