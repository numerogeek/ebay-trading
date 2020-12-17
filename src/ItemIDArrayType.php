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
 * Type defining the
 * PromotionalSaleItemIDArray
 * container, which
 * consists of an array of listings to which a Promotional Sale applies.
 **/
class ItemIDArrayType extends EbatNs_ComplexType
{
    const TAG = 'ItemIDArrayType';
    const NAME = 'ItemIDArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ItemIDType[]|null
     */
    protected $ItemID = [];


    /**
     * @return ItemIDType[]|ItemIDType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getItemID($index = null)
    {
        return $this->_dc($index === null
            ? $this->ItemID
            : (count($this->ItemID) > $index
                ? $this->ItemID[$index]
                : null), 'ItemID');
    }

    /**
     * @param ItemIDType|null|ItemIDType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setItemID($value, $index = null)
    {
        if ($index === null) {
            $this->ItemID = $value;
        } else {
            $this->ItemID[$index] = [];
            
            foreach ($value as $item) {
                $this->addItemID($item);
            }
        }
    }

    /**
     * @param ItemIDType|null $value
     * @return void
     */
    public function addItemID($value)
    {
        $this->ItemID[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

ItemIDArrayType::_register();
