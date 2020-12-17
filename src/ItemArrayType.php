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
 * Container for a list of items. Can contain zero, one, or multiple
 * 
 * ItemType
 * objects, each of which conveys the data for one item listing.
 **/
class ItemArrayType extends EbatNs_ComplexType
{
    const TAG = 'ItemArrayType';
    const NAME = 'ItemArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ItemType[]|null
     */
    protected $Item = [];


    /**
     * @return ItemType[]|ItemType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getItem($index = null)
    {
        return $this->_dc($index === null
            ? $this->Item
            : (count($this->Item) > $index
                ? $this->Item[$index]
                : null), 'Item');
    }

    /**
     * @param ItemType|null|ItemType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setItem($value, $index = null)
    {
        if ($index === null) {
            $this->Item = $value;
        } else {
            $this->Item[$index] = [];
            
            foreach ($value as $item) {
                $this->addItem($item);
            }
        }
    }

    /**
     * @param ItemType|null $value
     * @return void
     */
    public function addItem($value)
    {
        $this->Item[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Item' => ['type' => 'ItemType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

ItemArrayType::_register();
