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
 * Returned if the user is a Selling Manager user. Defines product information for Selling Manager users.
 **/
class SellingManagerProductDetailsType extends EbatNs_ComplexType
{
    const TAG = 'SellingManagerProductDetailsType';
    const NAME = 'SellingManagerProductDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $ProductName = null;

    /**
     * @var int|null
     */
    protected $ProductID = null;

    /**
     * @var string|null
     */
    protected $CustomLabel = null;

    /**
     * @var int|null
     */
    protected $QuantityAvailable = null;

    /**
     * @var AmountType|null
     */
    protected $UnitCost = null;

    /**
     * @var int|null
     */
    protected $FolderID = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $RestockAlert = null;

    /**
     * @var int|null
     */
    protected $RestockThreshold = null;

    /**
     * @var SellingManagerVendorDetailsType|null
     */
    protected $VendorInfo = null;

    /**
     * @var string|null
     */
    protected $Note = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProductName()
    {
        return $this->_dc($this->ProductName, 'ProductName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setProductName($value)
    {
        $this->ProductName = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProductID()
    {
        return $this->_dc($this->ProductID, 'ProductID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setProductID($value)
    {
        $this->ProductID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCustomLabel()
    {
        return $this->_dc($this->CustomLabel, 'CustomLabel');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCustomLabel($value)
    {
        $this->CustomLabel = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuantityAvailable()
    {
        return $this->_dc($this->QuantityAvailable, 'QuantityAvailable');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setQuantityAvailable($value)
    {
        $this->QuantityAvailable = self::_int($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUnitCost()
    {
        return $this->_dc($this->UnitCost, 'UnitCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setUnitCost($value)
    {
        $this->UnitCost = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFolderID()
    {
        return $this->_dc($this->FolderID, 'FolderID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setFolderID($value)
    {
        $this->FolderID = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRestockAlert()
    {
        return $this->_dc($this->RestockAlert === 'true', 'RestockAlert');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setRestockAlert($value)
    {
        $this->RestockAlert = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRestockThreshold()
    {
        return $this->_dc($this->RestockThreshold, 'RestockThreshold');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setRestockThreshold($value)
    {
        $this->RestockThreshold = self::_int($value);
    }

    /**
     * @return SellingManagerVendorDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVendorInfo()
    {
        return $this->_dc($this->VendorInfo, 'VendorInfo');
    }

    /**
     * @param SellingManagerVendorDetailsType|null $value
     * @return void
     */
    public function setVendorInfo($value)
    {
        $this->VendorInfo = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNote()
    {
        return $this->_dc($this->Note, 'Note');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setNote($value)
    {
        $this->Note = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ProductName' => [],
            'ProductID' => ['type' => 'int'],
            'CustomLabel' => [],
            'QuantityAvailable' => ['type' => 'int'],
            'UnitCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'FolderID' => ['type' => 'int'],
            'RestockAlert' => ['type' => 'bool'],
            'RestockThreshold' => ['type' => 'int'],
            'VendorInfo' => ['type' => 'SellingManagerVendorDetailsType', 'xmlns' => self::XMLNS],
            'Note' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellingManagerProductDetailsType::_register();
