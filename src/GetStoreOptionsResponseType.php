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
 * GetStoreOptions
 * call.
 **/
class GetStoreOptionsResponseType extends EbatNs_Response
{
    const TAG = 'GetStoreOptionsResponseType';
    const NAME = 'GetStoreOptionsResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var StoreThemeArrayType|null
     */
    protected $BasicThemeArray = null;

    /**
     * @var StoreThemeArrayType|null
     */
    protected $AdvancedThemeArray = null;

    /**
     * @var StoreLogoArrayType|null
     */
    protected $LogoArray = null;

    /**
     * @var StoreSubscriptionArrayType|null
     */
    protected $SubscriptionArray = null;

    /**
     * @var int|null
     */
    protected $MaxCategories = null;

    /**
     * @var int|null
     */
    protected $MaxCategoryLevels = null;


    /**
     * @return StoreThemeArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBasicThemeArray()
    {
        return $this->_dc($this->BasicThemeArray, 'BasicThemeArray');
    }

    /**
     * @param StoreThemeArrayType|null $value
     * @return void
     */
    public function setBasicThemeArray($value)
    {
        $this->BasicThemeArray = $value;
    }

    /**
     * @return StoreThemeArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAdvancedThemeArray()
    {
        return $this->_dc($this->AdvancedThemeArray, 'AdvancedThemeArray');
    }

    /**
     * @param StoreThemeArrayType|null $value
     * @return void
     */
    public function setAdvancedThemeArray($value)
    {
        $this->AdvancedThemeArray = $value;
    }

    /**
     * @return StoreLogoArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLogoArray()
    {
        return $this->_dc($this->LogoArray, 'LogoArray');
    }

    /**
     * @param StoreLogoArrayType|null $value
     * @return void
     */
    public function setLogoArray($value)
    {
        $this->LogoArray = $value;
    }

    /**
     * @return StoreSubscriptionArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSubscriptionArray()
    {
        return $this->_dc($this->SubscriptionArray, 'SubscriptionArray');
    }

    /**
     * @param StoreSubscriptionArrayType|null $value
     * @return void
     */
    public function setSubscriptionArray($value)
    {
        $this->SubscriptionArray = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxCategories()
    {
        return $this->_dc($this->MaxCategories, 'MaxCategories');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMaxCategories($value)
    {
        $this->MaxCategories = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxCategoryLevels()
    {
        return $this->_dc($this->MaxCategoryLevels, 'MaxCategoryLevels');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMaxCategoryLevels($value)
    {
        $this->MaxCategoryLevels = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'BasicThemeArray' => ['type' => 'StoreThemeArrayType', 'xmlns' => self::XMLNS],
            'AdvancedThemeArray' => ['type' => 'StoreThemeArrayType', 'xmlns' => self::XMLNS],
            'LogoArray' => ['type' => 'StoreLogoArrayType', 'xmlns' => self::XMLNS],
            'SubscriptionArray' => ['type' => 'StoreSubscriptionArrayType', 'xmlns' => self::XMLNS],
            'MaxCategories' => ['type' => 'int'],
            'MaxCategoryLevels' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetStoreOptionsResponseType::_register();
