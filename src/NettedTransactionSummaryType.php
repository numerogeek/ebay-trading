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
 * This type is used by the
 * NettedTransactionSummary
 * container, which shows the total amount of fees (and credits if applicable) that have already been paid through
 * seller payout deductions.
 * 
 * 
 * <span class="tablenote">
 * Note:
 * For a limited number of managed payments sellers, final value fees and payment processing fees will start
 * getting deducted from seller payouts as early as mid-June 2020, but for many other managed payments sellers,
 * these fees won't start getting deducted from seller payouts until mid-July 2020.
 * </span>
 **/
class NettedTransactionSummaryType extends EbatNs_ComplexType
{
    const TAG = 'NettedTransactionSummaryType';
    const NAME = 'NettedTransactionSummaryType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AmountType|null
     */
    protected $TotalNettedChargeAmount = null;

    /**
     * @var AmountType|null
     */
    protected $TotalNettedCreditAmount = null;


    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalNettedChargeAmount()
    {
        return $this->_dc($this->TotalNettedChargeAmount, 'TotalNettedChargeAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setTotalNettedChargeAmount($value)
    {
        $this->TotalNettedChargeAmount = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalNettedCreditAmount()
    {
        return $this->_dc($this->TotalNettedCreditAmount, 'TotalNettedCreditAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setTotalNettedCreditAmount($value)
    {
        $this->TotalNettedCreditAmount = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'TotalNettedChargeAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'TotalNettedCreditAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

NettedTransactionSummaryType::_register();
