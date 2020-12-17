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
 * CategorySpecific
 * container in the
 * GetCategorySpecifics
 * request. The
 * CategorySpecific
 * container is used when a seller wants to pass in Item Specific name-value(s) pairs for a specific category to
 * discover if eBay has better name or value recommendations for that Item Specific.
 **/
class CategoryItemSpecificsType extends EbatNs_ComplexType
{
    const TAG = 'CategoryItemSpecificsType';
    const NAME = 'CategoryItemSpecificsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $CategoryID = null;

    /**
     * @var NameValueListArrayType|null
     */
    protected $ItemSpecifics = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategoryID()
    {
        return $this->_dc($this->CategoryID, 'CategoryID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCategoryID($value)
    {
        $this->CategoryID = self::_string($value);
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
            'CategoryID' => [],
            'ItemSpecifics' => ['type' => 'NameValueListArrayType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CategoryItemSpecificsType::_register();
