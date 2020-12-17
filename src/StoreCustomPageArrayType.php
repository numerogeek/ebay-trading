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
 * Set of Store custom pages.
 **/
class StoreCustomPageArrayType extends EbatNs_ComplexType
{
    const TAG = 'StoreCustomPageArrayType';
    const NAME = 'StoreCustomPageArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var StoreCustomPageType[]|null
     */
    protected $CustomPage = [];


    /**
     * @return StoreCustomPageType[]|StoreCustomPageType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getCustomPage($index = null)
    {
        return $this->_dc($index === null
            ? $this->CustomPage
            : (count($this->CustomPage) > $index
                ? $this->CustomPage[$index]
                : null), 'CustomPage');
    }

    /**
     * @param StoreCustomPageType|null|StoreCustomPageType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setCustomPage($value, $index = null)
    {
        if ($index === null) {
            $this->CustomPage = $value;
        } else {
            $this->CustomPage[$index] = [];
            
            foreach ($value as $item) {
                $this->addCustomPage($item);
            }
        }
    }

    /**
     * @param StoreCustomPageType|null $value
     * @return void
     */
    public function addCustomPage($value)
    {
        $this->CustomPage[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['CustomPage' => ['type' => 'StoreCustomPageType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

StoreCustomPageArrayType::_register();
