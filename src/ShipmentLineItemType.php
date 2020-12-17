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
 * This type provides information about one or more order line items in a Global Shipping Program package.
 **/
class ShipmentLineItemType extends EbatNs_ComplexType
{
    const TAG = 'ShipmentLineItemType';
    const NAME = 'ShipmentLineItemType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var LineItemType[]|null
     * @required
     */
    protected $LineItem = [];


    /**
     * @return LineItemType[]|LineItemType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getLineItem($index = null)
    {
        return $this->_dc($index === null
            ? $this->LineItem
            : (count($this->LineItem) > $index
                ? $this->LineItem[$index]
                : null), 'LineItem');
    }

    /**
     * @param LineItemType|null|LineItemType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setLineItem($value, $index = null)
    {
        if ($index === null) {
            $this->LineItem = $value;
        } else {
            $this->LineItem[$index] = [];
            
            foreach ($value as $item) {
                $this->addLineItem($item);
            }
        }
    }

    /**
     * @param LineItemType|null $value
     * @return void
     */
    public function addLineItem($value)
    {
        $this->LineItem[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['LineItem' => ['required' => true, 'type' => 'LineItemType', 'xmlns' => self::XMLNS, 'cardinality' => '1..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

ShipmentLineItemType::_register();
