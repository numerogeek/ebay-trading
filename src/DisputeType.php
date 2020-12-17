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
 * Contains all information describing a dispute.
 * 
 * <span class="tablenote"><strong>Note:</strong>
 * 'Item Not Received' or 'Significantly Not As Described' cases, initiated by buyers through the eBay Money
 * Back Guarantee program, are not returned with
 * GetDispute
 * or
 * GetUserDisputes
 * . The <a
 * href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a>
 * method of the <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a>
 * is used to retrieve Money Back Guarantee cases programmatically.
 * </span>
 **/
class DisputeType extends EbatNs_ComplexType
{
    const TAG = 'DisputeType';
    const NAME = 'DisputeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var DisputeIDType|null
     */
    protected $DisputeID = null;

    /**
     * @var DisputeRecordTypeCodeType|null
     */
    protected $DisputeRecordType = null;

    /**
     * @var DisputeStateCodeType|null
     */
    protected $DisputeState = null;

    /**
     * @var DisputeStatusCodeType|null
     */
    protected $DisputeStatus = null;

    /**
     * @var TradingRoleCodeType|null
     */
    protected $OtherPartyRole = null;

    /**
     * @var string|null
     */
    protected $OtherPartyName = null;

    /**
     * @var TradingRoleCodeType|null
     */
    protected $UserRole = null;

    /**
     * @var UserIDType|null
     */
    protected $BuyerUserID = null;

    /**
     * @var UserIDType|null
     */
    protected $SellerUserID = null;

    /**
     * @var string|null
     */
    protected $TransactionID = null;

    /**
     * @var ItemType|null
     */
    protected $Item = null;

    /**
     * @var DisputeReasonCodeType|null
     */
    protected $DisputeReason = null;

    /**
     * @var DisputeExplanationCodeType|null
     */
    protected $DisputeExplanation = null;

    /**
     * @var DisputeCreditEligibilityCodeType|null
     */
    protected $DisputeCreditEligibility = null;

    /**
     * @var string|null
     */
    protected $DisputeCreatedTime = null;

    /**
     * @var string|null
     */
    protected $DisputeModifiedTime = null;

    /**
     * @var DisputeResolutionType[]|null
     */
    protected $DisputeResolution = [];

    /**
     * @var DisputeMessageType[]|null
     */
    protected $DisputeMessage = [];

    /**
     * @var bool|null "true" or "false"
     */
    protected $Escalation = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $PurchaseProtection = null;

    /**
     * @var string|null
     */
    protected $OrderLineItemID = null;


    /**
     * @return DisputeIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisputeID()
    {
        return $this->_dc($this->DisputeID, 'DisputeID');
    }

    /**
     * @param DisputeIDType|null $value
     * @return void
     */
    public function setDisputeID($value)
    {
        $this->DisputeID = $value;
    }

    /**
     * @return DisputeRecordTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisputeRecordType()
    {
        return $this->_dc($this->DisputeRecordType);
    }

    /**
     * @param DisputeRecordTypeCodeType|null $value
     * @return void
     */
    public function setDisputeRecordType($value)
    {
        $this->DisputeRecordType = $this->_enum($value, DisputeRecordTypeCodeType::class);
    }

    /**
     * @return DisputeStateCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisputeState()
    {
        return $this->_dc($this->DisputeState);
    }

    /**
     * @param DisputeStateCodeType|null $value
     * @return void
     */
    public function setDisputeState($value)
    {
        $this->DisputeState = $this->_enum($value, DisputeStateCodeType::class);
    }

    /**
     * @return DisputeStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisputeStatus()
    {
        return $this->_dc($this->DisputeStatus);
    }

    /**
     * @param DisputeStatusCodeType|null $value
     * @return void
     */
    public function setDisputeStatus($value)
    {
        $this->DisputeStatus = $this->_enum($value, DisputeStatusCodeType::class);
    }

    /**
     * @return TradingRoleCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOtherPartyRole()
    {
        return $this->_dc($this->OtherPartyRole);
    }

    /**
     * @param TradingRoleCodeType|null $value
     * @return void
     */
    public function setOtherPartyRole($value)
    {
        $this->OtherPartyRole = $this->_enum($value, TradingRoleCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOtherPartyName()
    {
        return $this->_dc($this->OtherPartyName, 'OtherPartyName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setOtherPartyName($value)
    {
        $this->OtherPartyName = self::_string($value);
    }

    /**
     * @return TradingRoleCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserRole()
    {
        return $this->_dc($this->UserRole);
    }

    /**
     * @param TradingRoleCodeType|null $value
     * @return void
     */
    public function setUserRole($value)
    {
        $this->UserRole = $this->_enum($value, TradingRoleCodeType::class);
    }

    /**
     * @return UserIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyerUserID()
    {
        return $this->_dc($this->BuyerUserID, 'BuyerUserID');
    }

    /**
     * @param UserIDType|null $value
     * @return void
     */
    public function setBuyerUserID($value)
    {
        $this->BuyerUserID = $value;
    }

    /**
     * @return UserIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerUserID()
    {
        return $this->_dc($this->SellerUserID, 'SellerUserID');
    }

    /**
     * @param UserIDType|null $value
     * @return void
     */
    public function setSellerUserID($value)
    {
        $this->SellerUserID = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTransactionID()
    {
        return $this->_dc($this->TransactionID, 'TransactionID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTransactionID($value)
    {
        $this->TransactionID = self::_string($value);
    }

    /**
     * @return ItemType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItem()
    {
        return $this->_dc($this->Item, 'Item');
    }

    /**
     * @param ItemType|null $value
     * @return void
     */
    public function setItem($value)
    {
        $this->Item = $value;
    }

    /**
     * @return DisputeReasonCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisputeReason()
    {
        return $this->_dc($this->DisputeReason);
    }

    /**
     * @param DisputeReasonCodeType|null $value
     * @return void
     */
    public function setDisputeReason($value)
    {
        $this->DisputeReason = $this->_enum($value, DisputeReasonCodeType::class);
    }

    /**
     * @return DisputeExplanationCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisputeExplanation()
    {
        return $this->_dc($this->DisputeExplanation);
    }

    /**
     * @param DisputeExplanationCodeType|null $value
     * @return void
     */
    public function setDisputeExplanation($value)
    {
        $this->DisputeExplanation = $this->_enum($value, DisputeExplanationCodeType::class);
    }

    /**
     * @return DisputeCreditEligibilityCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisputeCreditEligibility()
    {
        return $this->_dc($this->DisputeCreditEligibility);
    }

    /**
     * @param DisputeCreditEligibilityCodeType|null $value
     * @return void
     */
    public function setDisputeCreditEligibility($value)
    {
        $this->DisputeCreditEligibility = $this->_enum($value, DisputeCreditEligibilityCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisputeCreatedTime()
    {
        return $this->_dc($this->DisputeCreatedTime, 'DisputeCreatedTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDisputeCreatedTime($value)
    {
        $this->DisputeCreatedTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisputeModifiedTime()
    {
        return $this->_dc($this->DisputeModifiedTime, 'DisputeModifiedTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDisputeModifiedTime($value)
    {
        $this->DisputeModifiedTime = self::_string($value);
    }

    /**
     * @return DisputeResolutionType[]|DisputeResolutionType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getDisputeResolution($index = null)
    {
        return $this->_dc($index === null
            ? $this->DisputeResolution
            : (count($this->DisputeResolution) > $index
                ? $this->DisputeResolution[$index]
                : null), 'DisputeResolution');
    }

    /**
     * @param DisputeResolutionType|null|DisputeResolutionType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setDisputeResolution($value, $index = null)
    {
        if ($index === null) {
            $this->DisputeResolution = $value;
        } else {
            $this->DisputeResolution[$index] = [];
            
            foreach ($value as $item) {
                $this->addDisputeResolution($item);
            }
        }
    }

    /**
     * @param DisputeResolutionType|null $value
     * @return void
     */
    public function addDisputeResolution($value)
    {
        $this->DisputeResolution[] = $value;
    }

    /**
     * @return DisputeMessageType[]|DisputeMessageType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getDisputeMessage($index = null)
    {
        return $this->_dc($index === null
            ? $this->DisputeMessage
            : (count($this->DisputeMessage) > $index
                ? $this->DisputeMessage[$index]
                : null), 'DisputeMessage');
    }

    /**
     * @param DisputeMessageType|null|DisputeMessageType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setDisputeMessage($value, $index = null)
    {
        if ($index === null) {
            $this->DisputeMessage = $value;
        } else {
            $this->DisputeMessage[$index] = [];
            
            foreach ($value as $item) {
                $this->addDisputeMessage($item);
            }
        }
    }

    /**
     * @param DisputeMessageType|null $value
     * @return void
     */
    public function addDisputeMessage($value)
    {
        $this->DisputeMessage[] = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEscalation()
    {
        return $this->_dc($this->Escalation === 'true', 'Escalation');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEscalation($value)
    {
        $this->Escalation = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPurchaseProtection()
    {
        return $this->_dc($this->PurchaseProtection === 'true', 'PurchaseProtection');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setPurchaseProtection($value)
    {
        $this->PurchaseProtection = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderLineItemID()
    {
        return $this->_dc($this->OrderLineItemID, 'OrderLineItemID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setOrderLineItemID($value)
    {
        $this->OrderLineItemID = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'DisputeID' => ['type' => 'DisputeIDType', 'xmlns' => self::XMLNS],
            'DisputeRecordType' => ['type' => 'DisputeRecordTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'DisputeState' => ['type' => 'DisputeStateCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'DisputeStatus' => ['type' => 'DisputeStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'OtherPartyRole' => ['type' => 'TradingRoleCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'OtherPartyName' => [],
            'UserRole' => ['type' => 'TradingRoleCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'BuyerUserID' => ['type' => 'UserIDType', 'xmlns' => self::XMLNS],
            'SellerUserID' => ['type' => 'UserIDType', 'xmlns' => self::XMLNS],
            'TransactionID' => [],
            'Item' => ['type' => 'ItemType', 'xmlns' => self::XMLNS],
            'DisputeReason' => ['type' => 'DisputeReasonCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'DisputeExplanation' => ['type' => 'DisputeExplanationCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'DisputeCreditEligibility' => ['type' => 'DisputeCreditEligibilityCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'DisputeCreatedTime' => [],
            'DisputeModifiedTime' => [],
            'DisputeResolution' => ['type' => 'DisputeResolutionType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'DisputeMessage' => ['type' => 'DisputeMessageType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'Escalation' => ['type' => 'bool'],
            'PurchaseProtection' => ['type' => 'bool'],
            'OrderLineItemID' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

DisputeType::_register();
