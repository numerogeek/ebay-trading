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
 * Type defining the
 * BuyerRequirementDetails
 * container, which allows the seller to set buyer requirements at the listing level. For the corresponding
 * listing, all buyer requirement values/settings will overwrite values/settings in Buyer Requirements preferences
 * in My eBay.
 **/
class BuyerRequirementDetailsType extends EbatNs_ComplexType
{
    const TAG = 'BuyerRequirementDetailsType';
    const NAME = 'BuyerRequirementDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShipToRegistrationCountry = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ZeroFeedbackScore = null;

    /**
     * @var MaximumItemRequirementsType|null
     */
    protected $MaximumItemRequirements = null;

    /**
     * @var MaximumUnpaidItemStrikesInfoType|null
     */
    protected $MaximumUnpaidItemStrikesInfo = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShipToRegistrationCountry()
    {
        return $this->_dc($this->ShipToRegistrationCountry === 'true', 'ShipToRegistrationCountry');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShipToRegistrationCountry($value)
    {
        $this->ShipToRegistrationCountry = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getZeroFeedbackScore()
    {
        return $this->_dc($this->ZeroFeedbackScore === 'true', 'ZeroFeedbackScore');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setZeroFeedbackScore($value)
    {
        $this->ZeroFeedbackScore = self::_bool($value);
    }

    /**
     * @return MaximumItemRequirementsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaximumItemRequirements()
    {
        return $this->_dc($this->MaximumItemRequirements, 'MaximumItemRequirements');
    }

    /**
     * @param MaximumItemRequirementsType|null $value
     * @return void
     */
    public function setMaximumItemRequirements($value)
    {
        $this->MaximumItemRequirements = $value;
    }

    /**
     * @return MaximumUnpaidItemStrikesInfoType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaximumUnpaidItemStrikesInfo()
    {
        return $this->_dc($this->MaximumUnpaidItemStrikesInfo, 'MaximumUnpaidItemStrikesInfo');
    }

    /**
     * @param MaximumUnpaidItemStrikesInfoType|null $value
     * @return void
     */
    public function setMaximumUnpaidItemStrikesInfo($value)
    {
        $this->MaximumUnpaidItemStrikesInfo = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ShipToRegistrationCountry' => ['type' => 'bool'],
            'ZeroFeedbackScore' => ['type' => 'bool'],
            'MaximumItemRequirements' => ['type' => 'MaximumItemRequirementsType', 'xmlns' => self::XMLNS],
            'MaximumUnpaidItemStrikesInfo' => ['type' => 'MaximumUnpaidItemStrikesInfoType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

BuyerRequirementDetailsType::_register();
