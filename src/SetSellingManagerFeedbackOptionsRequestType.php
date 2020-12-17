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
 * Enables Selling Manager Pro subscribers to store standard feedback comments that can
 * be left for their buyers. Selling Manager Pro subscribers can also specify what
 * events, if any, will trigger an automated feedback response to buyers.
 **/
class SetSellingManagerFeedbackOptionsRequestType extends AbstractRequestType
{
    const TAG = 'SetSellingManagerFeedbackOptionsRequest';
    const NAME = 'SetSellingManagerFeedbackOptionsRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'SetSellingManagerFeedbackOptions';

    /**
     * @var AutomatedLeaveFeedbackEventCodeType|null
     */
    protected $AutomatedLeaveFeedbackEvent = null;

    /**
     * @var FeedbackCommentArrayType|null
     */
    protected $StoredComments = null;


    /**
     * @return AutomatedLeaveFeedbackEventCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAutomatedLeaveFeedbackEvent()
    {
        return $this->_dc($this->AutomatedLeaveFeedbackEvent);
    }

    /**
     * @param AutomatedLeaveFeedbackEventCodeType|null $value
     * @return void
     */
    public function setAutomatedLeaveFeedbackEvent($value)
    {
        $this->AutomatedLeaveFeedbackEvent = $this->_enum($value, AutomatedLeaveFeedbackEventCodeType::class);
    }

    /**
     * @return FeedbackCommentArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStoredComments()
    {
        return $this->_dc($this->StoredComments, 'StoredComments');
    }

    /**
     * @param FeedbackCommentArrayType|null $value
     * @return void
     */
    public function setStoredComments($value)
    {
        $this->StoredComments = $value;
    }

    /**
     * @return SetSellingManagerFeedbackOptionsResponseType|EbatNs_ResponseError
     * @param EbatNs_Client
     **/
    function call($client)
    {
        return $client->call(self::REQUEST, $this);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'AutomatedLeaveFeedbackEvent' => ['type' => 'AutomatedLeaveFeedbackEventCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'StoredComments' => ['type' => 'FeedbackCommentArrayType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SetSellingManagerFeedbackOptionsRequestType::_register();
