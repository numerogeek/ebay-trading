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
 * AddSellingManagerTemplate
 * call. The response includes the unique identifier and name of the new Selling Manager template, the listing
 * category, some information on the Selling Manager product associated with the template, and the expected listing
 * fees if a listing is created using this Selling Manager template.
 **/
class AddSellingManagerTemplateResponseType extends EbatNs_Response
{
    const TAG = 'AddSellingManagerTemplateResponseType';
    const NAME = 'AddSellingManagerTemplateResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $CategoryID = null;

    /**
     * @var int|null
     */
    protected $Category2ID = null;

    /**
     * @var int|null
     */
    protected $SaleTemplateID = null;

    /**
     * @var int|null
     */
    protected $SaleTemplateGroupID = null;

    /**
     * @var string|null
     */
    protected $SaleTemplateName = null;

    /**
     * @var SellingManagerProductDetailsType|null
     */
    protected $SellingManagerProductDetails = null;

    /**
     * @var FeesType|null
     */
    protected $Fees = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategoryID()
    {
        return $this->_dc($this->CategoryID, 'CategoryID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setCategoryID($value)
    {
        $this->CategoryID = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategory2ID()
    {
        return $this->_dc($this->Category2ID, 'Category2ID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setCategory2ID($value)
    {
        $this->Category2ID = self::_int($value);
    }

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
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSaleTemplateGroupID()
    {
        return $this->_dc($this->SaleTemplateGroupID, 'SaleTemplateGroupID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setSaleTemplateGroupID($value)
    {
        $this->SaleTemplateGroupID = self::_int($value);
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
     * @return FeesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFees()
    {
        return $this->_dc($this->Fees, 'Fees');
    }

    /**
     * @param FeesType|null $value
     * @return void
     */
    public function setFees($value)
    {
        $this->Fees = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CategoryID' => ['type' => 'int'],
            'Category2ID' => ['type' => 'int'],
            'SaleTemplateID' => ['type' => 'int'],
            'SaleTemplateGroupID' => ['type' => 'int'],
            'SaleTemplateName' => [],
            'SellingManagerProductDetails' => ['type' => 'SellingManagerProductDetailsType', 'xmlns' => self::XMLNS],
            'Fees' => ['type' => 'FeesType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AddSellingManagerTemplateResponseType::_register();
