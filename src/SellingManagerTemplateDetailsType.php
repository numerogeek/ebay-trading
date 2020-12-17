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
 * Describes a Selling Manager Template
 **/
class SellingManagerTemplateDetailsType extends EbatNs_ComplexType
{
    const TAG = 'SellingManagerTemplateDetailsType';
    const NAME = 'SellingManagerTemplateDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $SaleTemplateID = null;

    /**
     * @var string|null
     */
    protected $SaleTemplateName = null;

    /**
     * @var float|null
     */
    protected $SuccessPercent = null;

    /**
     * @var SellingManagerProductDetailsType|null
     */
    protected $SellingManagerProductDetails = null;

    /**
     * @var ItemType|null
     */
    protected $Template = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSaleTemplateID()
    {
        return $this->_dc($this->SaleTemplateID, 'SaleTemplateID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSaleTemplateID($value)
    {
        $this->SaleTemplateID = self::_string($value);
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
     * @return float|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSuccessPercent()
    {
        return $this->_dc($this->SuccessPercent, 'SuccessPercent');
    }

    /**
     * @param float|null $value
     * @return void
     */
    public function setSuccessPercent($value)
    {
        $this->SuccessPercent = self::_float($value);
    }

    /**
     * @return SellingManagerProductDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellingManagerProductDetails()
    {
        return $this->_dc($this->SellingManagerProductDetails, 'SellingManagerProductDetails');
    }

    /**
     * @param SellingManagerProductDetailsType|null $value
     * @return void
     */
    public function setSellingManagerProductDetails($value)
    {
        $this->SellingManagerProductDetails = $value;
    }

    /**
     * @return ItemType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTemplate()
    {
        return $this->_dc($this->Template, 'Template');
    }

    /**
     * @param ItemType|null $value
     * @return void
     */
    public function setTemplate($value)
    {
        $this->Template = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'SaleTemplateID' => [],
            'SaleTemplateName' => [],
            'SuccessPercent' => ['type' => 'float'],
            'SellingManagerProductDetails' => ['type' => 'SellingManagerProductDetailsType', 'xmlns' => self::XMLNS],
            'Template' => ['type' => 'ItemType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellingManagerTemplateDetailsType::_register();
