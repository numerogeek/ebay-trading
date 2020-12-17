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
 * Type used by the Subscription container that is returned in GetStoreOptions to indicate the subscription level
 * and monthly fee associated with the eBay Store.
 **/
class StoreSubscriptionType extends EbatNs_ComplexType
{
    const TAG = 'StoreSubscriptionType';
    const NAME = 'StoreSubscriptionType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var StoreSubscriptionLevelCodeType|null
     */
    protected $Level = null;

    /**
     * @var AmountType|null
     */
    protected $Fee = null;


    /**
     * @return StoreSubscriptionLevelCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLevel()
    {
        return $this->_dc($this->Level);
    }

    /**
     * @param StoreSubscriptionLevelCodeType|null $value
     * @return void
     */
    public function setLevel($value)
    {
        $this->Level = $this->_enum($value, StoreSubscriptionLevelCodeType::class);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFee()
    {
        return $this->_dc($this->Fee, 'Fee');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setFee($value)
    {
        $this->Fee = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Level' => ['type' => 'StoreSubscriptionLevelCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Fee' => ['type' => 'AmountType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

StoreSubscriptionType::_register();
