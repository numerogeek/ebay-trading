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
 * Type defining the Alert container, which contains summary information on one type of
 * Selling Manager alert.
 **/
class SellingManagerAlertType extends EbatNs_ComplexType
{
    const TAG = 'SellingManagerAlertType';
    const NAME = 'SellingManagerAlertType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SellingManagerAlertTypeCodeType|null
     */
    protected $AlertType = null;

    /**
     * @var SellingManagerSoldListingsPropertyTypeCodeType|null
     */
    protected $SoldAlert = null;

    /**
     * @var SellingManagerInventoryPropertyTypeCodeType|null
     */
    protected $InventoryAlert = null;

    /**
     * @var SellingManagerAutomationPropertyTypeCodeType|null
     */
    protected $AutomationAlert = null;

    /**
     * @var SellingManagerPaisaPayPropertyTypeCodeType|null
     */
    protected $PaisaPayAlert = null;

    /**
     * @var SellingManagerGeneralPropertyTypeCodeType|null
     */
    protected $GeneralAlert = null;

    /**
     * @var int|null
     */
    protected $DurationInDays = null;

    /**
     * @var int|null
     */
    protected $Count = null;


    /**
     * @return SellingManagerAlertTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAlertType()
    {
        return $this->_dc($this->AlertType);
    }

    /**
     * @param SellingManagerAlertTypeCodeType|null $value
     * @return void
     */
    public function setAlertType($value)
    {
        $this->AlertType = $this->_enum($value, SellingManagerAlertTypeCodeType::class);
    }

    /**
     * @return SellingManagerSoldListingsPropertyTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSoldAlert()
    {
        return $this->_dc($this->SoldAlert);
    }

    /**
     * @param SellingManagerSoldListingsPropertyTypeCodeType|null $value
     * @return void
     */
    public function setSoldAlert($value)
    {
        $this->SoldAlert = $this->_enum($value, SellingManagerSoldListingsPropertyTypeCodeType::class);
    }

    /**
     * @return SellingManagerInventoryPropertyTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInventoryAlert()
    {
        return $this->_dc($this->InventoryAlert);
    }

    /**
     * @param SellingManagerInventoryPropertyTypeCodeType|null $value
     * @return void
     */
    public function setInventoryAlert($value)
    {
        $this->InventoryAlert = $this->_enum($value, SellingManagerInventoryPropertyTypeCodeType::class);
    }

    /**
     * @return SellingManagerAutomationPropertyTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAutomationAlert()
    {
        return $this->_dc($this->AutomationAlert);
    }

    /**
     * @param SellingManagerAutomationPropertyTypeCodeType|null $value
     * @return void
     */
    public function setAutomationAlert($value)
    {
        $this->AutomationAlert = $this->_enum($value, SellingManagerAutomationPropertyTypeCodeType::class);
    }

    /**
     * @return SellingManagerPaisaPayPropertyTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaisaPayAlert()
    {
        return $this->_dc($this->PaisaPayAlert);
    }

    /**
     * @param SellingManagerPaisaPayPropertyTypeCodeType|null $value
     * @return void
     */
    public function setPaisaPayAlert($value)
    {
        $this->PaisaPayAlert = $this->_enum($value, SellingManagerPaisaPayPropertyTypeCodeType::class);
    }

    /**
     * @return SellingManagerGeneralPropertyTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGeneralAlert()
    {
        return $this->_dc($this->GeneralAlert);
    }

    /**
     * @param SellingManagerGeneralPropertyTypeCodeType|null $value
     * @return void
     */
    public function setGeneralAlert($value)
    {
        $this->GeneralAlert = $this->_enum($value, SellingManagerGeneralPropertyTypeCodeType::class);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDurationInDays()
    {
        return $this->_dc($this->DurationInDays, 'DurationInDays');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setDurationInDays($value)
    {
        $this->DurationInDays = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCount()
    {
        return $this->_dc($this->Count, 'Count');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setCount($value)
    {
        $this->Count = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'AlertType' => ['type' => 'SellingManagerAlertTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'SoldAlert' => ['type' => 'SellingManagerSoldListingsPropertyTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'InventoryAlert' => ['type' => 'SellingManagerInventoryPropertyTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'AutomationAlert' => ['type' => 'SellingManagerAutomationPropertyTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PaisaPayAlert' => ['type' => 'SellingManagerPaisaPayPropertyTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'GeneralAlert' => ['type' => 'SellingManagerGeneralPropertyTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'DurationInDays' => ['type' => 'int'],
            'Count' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellingManagerAlertType::_register();
