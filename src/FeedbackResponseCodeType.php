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
 * This enumerated type is used to indicate the type of response to a Feedback entry.
 **/
class FeedbackResponseCodeType extends EbatNs_EnumType
{
    const TAG = 'FeedbackResponseCodeType';
    const NAME = 'FeedbackResponseCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value is used in the
     * ResponseType
     * field of a
     * RespondToFeedback
     * call if the user is replying to a Feedback entry left by another user.
     **/
    const CodeType_Reply = 'Reply';

    /**
     * This enumeration value is used in the
     * ResponseType
     * field of a
     * RespondToFeedback
     * call if the user is following up on a Feedback entry comment left by another user.
     **/
    const CodeType_FollowUp = 'FollowUp';

    /**
     * Reserved for future use.
     **/
    const CodeType_CustomCode = 'CustomCode';
    
    /**
     * @var string|null
     */
    protected $_value = null;


    /**
     * @param string|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return FeedbackResponseCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param FeedbackResponseCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isReply()
    {
        return $this->_value === self::CodeType_Reply;
    }

    /**
     * @return bool
     */
    public function isFollowUp()
    {
        return $this->_value === self::CodeType_FollowUp;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

FeedbackResponseCodeType::_register();
