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
 * Configuration of a Store custom listing header.
 **/
class StoreCustomListingHeaderType extends EbatNs_ComplexType
{
    const TAG = 'StoreCustomListingHeaderType';
    const NAME = 'StoreCustomListingHeaderType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var StoreCustomListingHeaderDisplayCodeType|null
     */
    protected $DisplayType = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $Logo = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $SearchBox = null;

    /**
     * @var StoreCustomListingHeaderLinkType[]|null
     */
    protected $LinkToInclude = [];

    /**
     * @var bool|null "true" or "false"
     */
    protected $AddToFavoriteStores = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $SignUpForStoreNewsletter = null;


    /**
     * @return StoreCustomListingHeaderDisplayCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisplayType()
    {
        return $this->_dc($this->DisplayType);
    }

    /**
     * @param StoreCustomListingHeaderDisplayCodeType|null $value
     * @return void
     */
    public function setDisplayType($value)
    {
        $this->DisplayType = $this->_enum($value, StoreCustomListingHeaderDisplayCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLogo()
    {
        return $this->_dc($this->Logo === 'true', 'Logo');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setLogo($value)
    {
        $this->Logo = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSearchBox()
    {
        return $this->_dc($this->SearchBox === 'true', 'SearchBox');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setSearchBox($value)
    {
        $this->SearchBox = self::_bool($value);
    }

    /**
     * @return StoreCustomListingHeaderLinkType[]|StoreCustomListingHeaderLinkType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getLinkToInclude($index = null)
    {
        return $this->_dc($index === null
            ? $this->LinkToInclude
            : (count($this->LinkToInclude) > $index
                ? $this->LinkToInclude[$index]
                : null), 'LinkToInclude');
    }

    /**
     * @param StoreCustomListingHeaderLinkType|null|StoreCustomListingHeaderLinkType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setLinkToInclude($value, $index = null)
    {
        if ($index === null) {
            $this->LinkToInclude = $value;
        } else {
            $this->LinkToInclude[$index] = [];
            
            foreach ($value as $item) {
                $this->addLinkToInclude($item);
            }
        }
    }

    /**
     * @param StoreCustomListingHeaderLinkType|null $value
     * @return void
     */
    public function addLinkToInclude($value)
    {
        $this->LinkToInclude[] = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAddToFavoriteStores()
    {
        return $this->_dc($this->AddToFavoriteStores === 'true', 'AddToFavoriteStores');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setAddToFavoriteStores($value)
    {
        $this->AddToFavoriteStores = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSignUpForStoreNewsletter()
    {
        return $this->_dc($this->SignUpForStoreNewsletter === 'true', 'SignUpForStoreNewsletter');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setSignUpForStoreNewsletter($value)
    {
        $this->SignUpForStoreNewsletter = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'DisplayType' => ['type' => 'StoreCustomListingHeaderDisplayCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Logo' => ['type' => 'bool'],
            'SearchBox' => ['type' => 'bool'],
            'LinkToInclude' => ['type' => 'StoreCustomListingHeaderLinkType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'AddToFavoriteStores' => ['type' => 'bool'],
            'SignUpForStoreNewsletter' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

StoreCustomListingHeaderType::_register();
