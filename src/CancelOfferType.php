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
 * This type is deprecated.
 **/
class CancelOfferType extends EbatNs_ComplexType
{
    const TAG = 'CancelOfferType';
    const NAME = 'CancelOfferType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var OfferType|null
     */
    protected $Offer = null;

    /**
     * @var string|null
     */
    protected $Explanation = null;


    /**
     * @return OfferType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOffer()
    {
        return $this->_dc($this->Offer, 'Offer');
    }

    /**
     * @param OfferType|null $value
     * @return void
     */
    public function setOffer($value)
    {
        $this->Offer = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExplanation()
    {
        return $this->_dc($this->Explanation, 'Explanation');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setExplanation($value)
    {
        $this->Explanation = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Offer' => ['type' => 'OfferType', 'xmlns' => self::XMLNS],
            'Explanation' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CancelOfferType::_register();
