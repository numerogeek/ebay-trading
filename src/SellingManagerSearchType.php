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
 * For searches of Selling Manager listings, specifies search type, such as
 * ProductID
 * or
 * BuyerUserID
 * ,
 * and search value.
 **/
class SellingManagerSearchType extends EbatNs_ComplexType
{
    const TAG = 'SellingManagerSearchType';
    const NAME = 'SellingManagerSearchType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SellingManagerSearchTypeCodeType|null
     */
    protected $SearchType = null;

    /**
     * @var string|null
     */
    protected $SearchValue = null;


    /**
     * @return SellingManagerSearchTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSearchType()
    {
        return $this->_dc($this->SearchType);
    }

    /**
     * @param SellingManagerSearchTypeCodeType|null $value
     * @return void
     */
    public function setSearchType($value)
    {
        $this->SearchType = $this->_enum($value, SellingManagerSearchTypeCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSearchValue()
    {
        return $this->_dc($this->SearchValue, 'SearchValue');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSearchValue($value)
    {
        $this->SearchValue = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'SearchType' => ['type' => 'SellingManagerSearchTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'SearchValue' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellingManagerSearchType::_register();
