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
 * Set of Store logos.
 **/
class StoreLogoArrayType extends EbatNs_ComplexType
{
    const TAG = 'StoreLogoArrayType';
    const NAME = 'StoreLogoArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var StoreLogoType[]|null
     */
    protected $Logo = [];


    /**
     * @return StoreLogoType[]|StoreLogoType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getLogo($index = null)
    {
        return $this->_dc($index === null
            ? $this->Logo
            : (count($this->Logo) > $index
                ? $this->Logo[$index]
                : null), 'Logo');
    }

    /**
     * @param StoreLogoType|null|StoreLogoType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setLogo($value, $index = null)
    {
        if ($index === null) {
            $this->Logo = $value;
        } else {
            $this->Logo[$index] = [];
            
            foreach ($value as $item) {
                $this->addLogo($item);
            }
        }
    }

    /**
     * @param StoreLogoType|null $value
     * @return void
     */
    public function addLogo($value)
    {
        $this->Logo[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Logo' => ['type' => 'StoreLogoType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

StoreLogoArrayType::_register();
