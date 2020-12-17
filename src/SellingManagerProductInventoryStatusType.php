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
 * Describes the inventory status of a specific Selling Manager Product
 **/
class SellingManagerProductInventoryStatusType extends EbatNs_ComplexType
{
    const TAG = 'SellingManagerProductInventoryStatusType';
    const NAME = 'SellingManagerProductInventoryStatusType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $QuantityScheduled = null;

    /**
     * @var int|null
     */
    protected $QuantityActive = null;

    /**
     * @var int|null
     */
    protected $QuantitySold = null;

    /**
     * @var int|null
     */
    protected $QuantityUnsold = null;

    /**
     * @var float|null
     */
    protected $SuccessPercent = null;

    /**
     * @var AmountType|null
     */
    protected $AverageSellingPrice = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuantityScheduled()
    {
        return $this->_dc($this->QuantityScheduled, 'QuantityScheduled');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setQuantityScheduled($value)
    {
        $this->QuantityScheduled = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuantityActive()
    {
        return $this->_dc($this->QuantityActive, 'QuantityActive');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setQuantityActive($value)
    {
        $this->QuantityActive = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuantitySold()
    {
        return $this->_dc($this->QuantitySold, 'QuantitySold');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setQuantitySold($value)
    {
        $this->QuantitySold = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuantityUnsold()
    {
        return $this->_dc($this->QuantityUnsold, 'QuantityUnsold');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setQuantityUnsold($value)
    {
        $this->QuantityUnsold = self::_int($value);
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
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAverageSellingPrice()
    {
        return $this->_dc($this->AverageSellingPrice, 'AverageSellingPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setAverageSellingPrice($value)
    {
        $this->AverageSellingPrice = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'QuantityScheduled' => ['type' => 'int'],
            'QuantityActive' => ['type' => 'int'],
            'QuantitySold' => ['type' => 'int'],
            'QuantityUnsold' => ['type' => 'int'],
            'SuccessPercent' => ['type' => 'float'],
            'AverageSellingPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellingManagerProductInventoryStatusType::_register();
