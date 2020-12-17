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
 * Contains the IDs for the Listing Designer theme and template (if either are
 * used) associated with an item, which can optionally be used to enhance the
 * appearance of the item's description. Cannot be used with Photo Display.
 * 
 * 
 * <span class="tablenote">
 * Note:
 * As of May 31, 2020, sellers are no longer able to use Listing Designer templates when they create or revise
 * listings. Existing listings that are already using a Listing Designer template will remain unchanged. The
 * ListingDesigner
 * container has been removed from the WSDL and this type is also staged for removal. If a seller tries to use the
 * ListingDesigner
 * container, it will have no effect on the listing, but the seller will receive a warning message about Listing
 * Designer templates no longer being available.</span>
 **/
class ListingDesignerType extends EbatNs_ComplexType
{
    const TAG = 'ListingDesignerType';
    const NAME = 'ListingDesignerType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $LayoutID = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $OptimalPictureSize = null;

    /**
     * @var int|null
     */
    protected $ThemeID = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLayoutID()
    {
        return $this->_dc($this->LayoutID, 'LayoutID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setLayoutID($value)
    {
        $this->LayoutID = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOptimalPictureSize()
    {
        return $this->_dc($this->OptimalPictureSize === 'true', 'OptimalPictureSize');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setOptimalPictureSize($value)
    {
        $this->OptimalPictureSize = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getThemeID()
    {
        return $this->_dc($this->ThemeID, 'ThemeID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setThemeID($value)
    {
        $this->ThemeID = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'LayoutID' => ['type' => 'int'],
            'OptimalPictureSize' => ['type' => 'bool'],
            'ThemeID' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ListingDesignerType::_register();
