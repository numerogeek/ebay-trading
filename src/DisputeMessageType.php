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
 * Contains a message posted to a dispute. The message can be posted
 * by the buyer, the seller, or an eBay representative.
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
class DisputeMessageType extends EbatNs_ComplexType
{
    const TAG = 'DisputeMessageType';
    const NAME = 'DisputeMessageType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $MessageID = null;

    /**
     * @var DisputeMessageSourceCodeType|null
     */
    protected $MessageSource = null;

    /**
     * @var string|null
     */
    protected $MessageCreationTime = null;

    /**
     * @var string|null
     */
    protected $MessageText = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMessageID()
    {
        return $this->_dc($this->MessageID, 'MessageID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMessageID($value)
    {
        $this->MessageID = self::_int($value);
    }

    /**
     * @return DisputeMessageSourceCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMessageSource()
    {
        return $this->_dc($this->MessageSource);
    }

    /**
     * @param DisputeMessageSourceCodeType|null $value
     * @return void
     */
    public function setMessageSource($value)
    {
        $this->MessageSource = $this->_enum($value, DisputeMessageSourceCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMessageCreationTime()
    {
        return $this->_dc($this->MessageCreationTime, 'MessageCreationTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMessageCreationTime($value)
    {
        $this->MessageCreationTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMessageText()
    {
        return $this->_dc($this->MessageText, 'MessageText');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMessageText($value)
    {
        $this->MessageText = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'MessageID' => ['type' => 'int'],
            'MessageSource' => ['type' => 'DisputeMessageSourceCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'MessageCreationTime' => [],
            'MessageText' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

DisputeMessageType::_register();
