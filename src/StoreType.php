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
 * The configuration of an eBay Store.
 **/
class StoreType extends EbatNs_ComplexType
{
    const TAG = 'StoreType';
    const NAME = 'StoreType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Name = null;

    /**
     * @var string|null
     */
    protected $URLPath = null;

    /**
     * @var string|null
     */
    protected $URL = null;

    /**
     * @var StoreSubscriptionLevelCodeType|null
     */
    protected $SubscriptionLevel = null;

    /**
     * @var string|null
     */
    protected $Description = null;

    /**
     * @var StoreLogoType|null
     */
    protected $Logo = null;

    /**
     * @var StoreThemeType|null
     */
    protected $Theme = null;

    /**
     * @var StoreHeaderStyleCodeType|null
     */
    protected $HeaderStyle = null;

    /**
     * @var int|null
     */
    protected $HomePage = null;

    /**
     * @var StoreItemListLayoutCodeType|null
     */
    protected $ItemListLayout = null;

    /**
     * @var StoreItemListSortOrderCodeType|null
     */
    protected $ItemListSortOrder = null;

    /**
     * @var StoreCustomHeaderLayoutCodeType|null
     */
    protected $CustomHeaderLayout = null;

    /**
     * @var string|null
     */
    protected $CustomHeader = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ExportListings = null;

    /**
     * @var StoreCustomCategoryArrayType|null
     */
    protected $CustomCategories = null;

    /**
     * @var StoreCustomListingHeaderType|null
     */
    protected $CustomListingHeader = null;

    /**
     * @var MerchDisplayCodeType|null
     */
    protected $MerchDisplay = null;

    /**
     * @var string|null
     */
    protected $LastOpenedTime = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $TitleWithCompatibility = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getName()
    {
        return $this->_dc($this->Name, 'Name');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setName($value)
    {
        $this->Name = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getURLPath()
    {
        return $this->_dc($this->URLPath, 'URLPath');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setURLPath($value)
    {
        $this->URLPath = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getURL()
    {
        return $this->_dc($this->URL, 'URL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setURL($value)
    {
        $this->URL = self::_string($value);
    }

    /**
     * @return StoreSubscriptionLevelCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSubscriptionLevel()
    {
        return $this->_dc($this->SubscriptionLevel);
    }

    /**
     * @param StoreSubscriptionLevelCodeType|null $value
     * @return void
     */
    public function setSubscriptionLevel($value)
    {
        $this->SubscriptionLevel = $this->_enum($value, StoreSubscriptionLevelCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDescription()
    {
        return $this->_dc($this->Description, 'Description');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDescription($value)
    {
        $this->Description = self::_string($value);
    }

    /**
     * @return StoreLogoType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLogo()
    {
        return $this->_dc($this->Logo, 'Logo');
    }

    /**
     * @param StoreLogoType|null $value
     * @return void
     */
    public function setLogo($value)
    {
        $this->Logo = $value;
    }

    /**
     * @return StoreThemeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTheme()
    {
        return $this->_dc($this->Theme, 'Theme');
    }

    /**
     * @param StoreThemeType|null $value
     * @return void
     */
    public function setTheme($value)
    {
        $this->Theme = $value;
    }

    /**
     * @return StoreHeaderStyleCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHeaderStyle()
    {
        return $this->_dc($this->HeaderStyle);
    }

    /**
     * @param StoreHeaderStyleCodeType|null $value
     * @return void
     */
    public function setHeaderStyle($value)
    {
        $this->HeaderStyle = $this->_enum($value, StoreHeaderStyleCodeType::class);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHomePage()
    {
        return $this->_dc($this->HomePage, 'HomePage');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setHomePage($value)
    {
        $this->HomePage = self::_int($value);
    }

    /**
     * @return StoreItemListLayoutCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemListLayout()
    {
        return $this->_dc($this->ItemListLayout);
    }

    /**
     * @param StoreItemListLayoutCodeType|null $value
     * @return void
     */
    public function setItemListLayout($value)
    {
        $this->ItemListLayout = $this->_enum($value, StoreItemListLayoutCodeType::class);
    }

    /**
     * @return StoreItemListSortOrderCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemListSortOrder()
    {
        return $this->_dc($this->ItemListSortOrder);
    }

    /**
     * @param StoreItemListSortOrderCodeType|null $value
     * @return void
     */
    public function setItemListSortOrder($value)
    {
        $this->ItemListSortOrder = $this->_enum($value, StoreItemListSortOrderCodeType::class);
    }

    /**
     * @return StoreCustomHeaderLayoutCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCustomHeaderLayout()
    {
        return $this->_dc($this->CustomHeaderLayout);
    }

    /**
     * @param StoreCustomHeaderLayoutCodeType|null $value
     * @return void
     */
    public function setCustomHeaderLayout($value)
    {
        $this->CustomHeaderLayout = $this->_enum($value, StoreCustomHeaderLayoutCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCustomHeader()
    {
        return $this->_dc($this->CustomHeader, 'CustomHeader');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCustomHeader($value)
    {
        $this->CustomHeader = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExportListings()
    {
        return $this->_dc($this->ExportListings === 'true', 'ExportListings');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setExportListings($value)
    {
        $this->ExportListings = self::_bool($value);
    }

    /**
     * @return StoreCustomCategoryArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCustomCategories()
    {
        return $this->_dc($this->CustomCategories, 'CustomCategories');
    }

    /**
     * @param StoreCustomCategoryArrayType|null $value
     * @return void
     */
    public function setCustomCategories($value)
    {
        $this->CustomCategories = $value;
    }

    /**
     * @return StoreCustomListingHeaderType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCustomListingHeader()
    {
        return $this->_dc($this->CustomListingHeader, 'CustomListingHeader');
    }

    /**
     * @param StoreCustomListingHeaderType|null $value
     * @return void
     */
    public function setCustomListingHeader($value)
    {
        $this->CustomListingHeader = $value;
    }

    /**
     * @return MerchDisplayCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMerchDisplay()
    {
        return $this->_dc($this->MerchDisplay);
    }

    /**
     * @param MerchDisplayCodeType|null $value
     * @return void
     */
    public function setMerchDisplay($value)
    {
        $this->MerchDisplay = $this->_enum($value, MerchDisplayCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLastOpenedTime()
    {
        return $this->_dc($this->LastOpenedTime, 'LastOpenedTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setLastOpenedTime($value)
    {
        $this->LastOpenedTime = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTitleWithCompatibility()
    {
        return $this->_dc($this->TitleWithCompatibility === 'true', 'TitleWithCompatibility');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setTitleWithCompatibility($value)
    {
        $this->TitleWithCompatibility = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Name' => [],
            'URLPath' => [],
            'URL' => [],
            'SubscriptionLevel' => ['type' => 'StoreSubscriptionLevelCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Description' => [],
            'Logo' => ['type' => 'StoreLogoType', 'xmlns' => self::XMLNS],
            'Theme' => ['type' => 'StoreThemeType', 'xmlns' => self::XMLNS],
            'HeaderStyle' => ['type' => 'StoreHeaderStyleCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'HomePage' => ['type' => 'int'],
            'ItemListLayout' => ['type' => 'StoreItemListLayoutCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ItemListSortOrder' => ['type' => 'StoreItemListSortOrderCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'CustomHeaderLayout' => ['type' => 'StoreCustomHeaderLayoutCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'CustomHeader' => [],
            'ExportListings' => ['type' => 'bool'],
            'CustomCategories' => ['type' => 'StoreCustomCategoryArrayType', 'xmlns' => self::XMLNS],
            'CustomListingHeader' => ['type' => 'StoreCustomListingHeaderType', 'xmlns' => self::XMLNS],
            'MerchDisplay' => ['type' => 'MerchDisplayCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'LastOpenedTime' => [],
            'TitleWithCompatibility' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

StoreType::_register();
