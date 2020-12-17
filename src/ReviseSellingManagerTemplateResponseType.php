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
 * Returns the template ID and the estimated fees for the revised listing.
 **/
class ReviseSellingManagerTemplateResponseType extends EbatNs_Response
{
    const TAG = 'ReviseSellingManagerTemplateResponseType';
    const NAME = 'ReviseSellingManagerTemplateResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $SaleTemplateID = null;

    /**
     * @var FeesType|null
     */
    protected $Fees = null;

    /**
     * @var string|null
     */
    protected $CategoryID = null;

    /**
     * @var string|null
     */
    protected $Category2ID = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $VerifyOnly = null;

    /**
     * @var string|null
     */
    protected $SaleTemplateName = null;

    /**
     * @var SellingManagerProductDetailsType|null
     */
    protected $SellingManagerProductDetails = null;


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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategoryID()
    {
        return $this->_dc($this->CategoryID, 'CategoryID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCategoryID($value)
    {
        $this->CategoryID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategory2ID()
    {
        return $this->_dc($this->Category2ID, 'Category2ID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCategory2ID($value)
    {
        $this->Category2ID = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVerifyOnly()
    {
        return $this->_dc($this->VerifyOnly === 'true', 'VerifyOnly');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setVerifyOnly($value)
    {
        $this->VerifyOnly = self::_bool($value);
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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'SaleTemplateID' => ['type' => 'int'],
            'Fees' => ['type' => 'FeesType', 'xmlns' => self::XMLNS],
            'CategoryID' => [],
            'Category2ID' => [],
            'VerifyOnly' => ['type' => 'bool'],
            'SaleTemplateName' => [],
            'SellingManagerProductDetails' => ['type' => 'SellingManagerProductDetailsType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ReviseSellingManagerTemplateResponseType::_register();
