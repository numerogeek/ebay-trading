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
 * <span class="tablenote">
 * Note:
 * As of May 1, 2019,  eBay no longer support electronic payments through Integrated Merchant Credit Card
 * accounts. To accept online credit card payments from buyers, a seller must use specify PayPal as an accepted
 * payment method, or opt in to eBay managed payments program (if the program is available to that seller).
 * </span>
 * 
 * This type is used by the
 * IntegratedMerchantCreditCardInfo
 * container that is returned in the
 * GetUser
 * response if the seller has a payment gateway account on one or more eBay marketplaces.
 **/
class IntegratedMerchantCreditCardInfoType extends EbatNs_ComplexType
{
    const TAG = 'IntegratedMerchantCreditCardInfoType';
    const NAME = 'IntegratedMerchantCreditCardInfoType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SiteCodeType[]|null
     */
    protected $SupportedSite = [];


    /**
     * @return string[]|SiteCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getSupportedSite($index = null)
    {
        return $this->_dc($index === null
            ? $this->SupportedSite
            : (count($this->SupportedSite) > $index
                ? $this->SupportedSite[$index]
                : null));
    }

    /**
     * @param SiteCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setSupportedSite($value, $index = null)
    {
        if ($index === null) {
            $this->SupportedSite = $value;
        } else {
            $this->SupportedSite[$index] = [];
            
            foreach ($value as $item) {
                $this->addSupportedSite($item);
            }
        }
    }

    /**
     * @param SiteCodeType|null $value
     * @return void
     */
    public function addSupportedSite($value)
    {
        $this->SupportedSite[] = $this->_enum($value, SiteCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['SupportedSite' => ['type' => 'SiteCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

IntegratedMerchantCreditCardInfoType::_register();
