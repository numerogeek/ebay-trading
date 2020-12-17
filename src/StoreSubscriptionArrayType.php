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
 * Set of eBay Store subscription levels.
 **/
class StoreSubscriptionArrayType extends EbatNs_ComplexType
{
    const TAG = 'StoreSubscriptionArrayType';
    const NAME = 'StoreSubscriptionArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var StoreSubscriptionType[]|null
     */
    protected $Subscription = [];


    /**
     * @return StoreSubscriptionType[]|StoreSubscriptionType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getSubscription($index = null)
    {
        return $this->_dc($index === null
            ? $this->Subscription
            : (count($this->Subscription) > $index
                ? $this->Subscription[$index]
                : null), 'Subscription');
    }

    /**
     * @param StoreSubscriptionType|null|StoreSubscriptionType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setSubscription($value, $index = null)
    {
        if ($index === null) {
            $this->Subscription = $value;
        } else {
            $this->Subscription[$index] = [];
            
            foreach ($value as $item) {
                $this->addSubscription($item);
            }
        }
    }

    /**
     * @param StoreSubscriptionType|null $value
     * @return void
     */
    public function addSubscription($value)
    {
        $this->Subscription[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Subscription' => ['type' => 'StoreSubscriptionType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

StoreSubscriptionArrayType::_register();
