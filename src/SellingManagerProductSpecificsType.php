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
 * This type is used by the
 * AddSellingManagerProduct
 * and
 * ReviseSellingManagerProduct
 * calls to add/revise listing-level Item Specifics and/or to define multiple variations for a new or existing
 * Selling Manager Product record.
 * 
 * This type is also used by the respone of the
 * GetSellingManagerInventory
 * call.
 **/
class SellingManagerProductSpecificsType extends EbatNs_ComplexType
{
    const TAG = 'SellingManagerProductSpecificsType';
    const NAME = 'SellingManagerProductSpecificsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $PrimaryCategoryID = null;

    /**
     * @var VariationsType|null
     */
    protected $Variations = null;

    /**
     * @var NameValueListArrayType|null
     */
    protected $ItemSpecifics = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPrimaryCategoryID()
    {
        return $this->_dc($this->PrimaryCategoryID, 'PrimaryCategoryID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPrimaryCategoryID($value)
    {
        $this->PrimaryCategoryID = self::_string($value);
    }

    /**
     * @return VariationsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVariations()
    {
        return $this->_dc($this->Variations, 'Variations');
    }

    /**
     * @param VariationsType|null $value
     * @return void
     */
    public function setVariations($value)
    {
        $this->Variations = $value;
    }

    /**
     * @return NameValueListArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemSpecifics()
    {
        return $this->_dc($this->ItemSpecifics, 'ItemSpecifics');
    }

    /**
     * @param NameValueListArrayType|null $value
     * @return void
     */
    public function setItemSpecifics($value)
    {
        $this->ItemSpecifics = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'PrimaryCategoryID' => [],
            'Variations' => ['type' => 'VariationsType', 'xmlns' => self::XMLNS],
            'ItemSpecifics' => ['type' => 'NameValueListArrayType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellingManagerProductSpecificsType::_register();
