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
 * Describes a Selling Manager Product
 **/
class SellingManagerProductType extends EbatNs_ComplexType
{
    const TAG = 'SellingManagerProductType';
    const NAME = 'SellingManagerProductType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SellingManagerProductDetailsType|null
     */
    protected $SellingManagerProductDetails = null;

    /**
     * @var SellingManagerTemplateDetailsArrayType|null
     */
    protected $SellingManagerTemplateDetailsArray = null;

    /**
     * @var SellingManagerProductInventoryStatusType|null
     */
    protected $SellingManagerProductInventoryStatus = null;

    /**
     * @var SellingManagerProductSpecificsType|null
     */
    protected $SellingManagerProductSpecifics = null;


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
     * @return SellingManagerProductInventoryStatusType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellingManagerProductInventoryStatus()
    {
        return $this->_dc($this->SellingManagerProductInventoryStatus, 'SellingManagerProductInventoryStatus');
    }

    /**
     * @param SellingManagerProductInventoryStatusType|null $value
     * @return void
     */
    public function setSellingManagerProductInventoryStatus($value)
    {
        $this->SellingManagerProductInventoryStatus = $value;
    }

    /**
     * @return SellingManagerProductSpecificsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellingManagerProductSpecifics()
    {
        return $this->_dc($this->SellingManagerProductSpecifics, 'SellingManagerProductSpecifics');
    }

    /**
     * @param SellingManagerProductSpecificsType|null $value
     * @return void
     */
    public function setSellingManagerProductSpecifics($value)
    {
        $this->SellingManagerProductSpecifics = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'SellingManagerProductDetails' => ['type' => 'SellingManagerProductDetailsType', 'xmlns' => self::XMLNS],
            'SellingManagerTemplateDetailsArray' => ['type' => 'SellingManagerTemplateDetailsArrayType', 'xmlns' => self::XMLNS],
            'SellingManagerProductInventoryStatus' => ['type' => 'SellingManagerProductInventoryStatusType', 'xmlns' => self::XMLNS],
            'SellingManagerProductSpecifics' => ['type' => 'SellingManagerProductSpecificsType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellingManagerProductType::_register();
