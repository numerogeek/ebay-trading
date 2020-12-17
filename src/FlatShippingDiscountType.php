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
 * Details of an individual discount profile defined by the
 * user for flat-rate shipping.
 **/
class FlatShippingDiscountType extends EbatNs_ComplexType
{
    const TAG = 'FlatShippingDiscountType';
    const NAME = 'FlatShippingDiscountType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var DiscountNameCodeType|null
     */
    protected $DiscountName = null;

    /**
     * @var DiscountProfileType[]|null
     */
    protected $DiscountProfile = [];


    /**
     * @return DiscountNameCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDiscountName()
    {
        return $this->_dc($this->DiscountName);
    }

    /**
     * @param DiscountNameCodeType|null $value
     * @return void
     */
    public function setDiscountName($value)
    {
        $this->DiscountName = $this->_enum($value, DiscountNameCodeType::class);
    }

    /**
     * @return DiscountProfileType[]|DiscountProfileType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getDiscountProfile($index = null)
    {
        return $this->_dc($index === null
            ? $this->DiscountProfile
            : (count($this->DiscountProfile) > $index
                ? $this->DiscountProfile[$index]
                : null), 'DiscountProfile');
    }

    /**
     * @param DiscountProfileType|null|DiscountProfileType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setDiscountProfile($value, $index = null)
    {
        if ($index === null) {
            $this->DiscountProfile = $value;
        } else {
            $this->DiscountProfile[$index] = [];
            
            foreach ($value as $item) {
                $this->addDiscountProfile($item);
            }
        }
    }

    /**
     * @param DiscountProfileType|null $value
     * @return void
     */
    public function addDiscountProfile($value)
    {
        $this->DiscountProfile[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'DiscountName' => ['type' => 'DiscountNameCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'DiscountProfile' => ['type' => 'DiscountProfileType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

FlatShippingDiscountType::_register();
