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
 * Base response for the
 * RespondToFeedback
 * . This response will indicate the success or failure of the attempt to reply to Feedback that has been left for a
 * user, or to post a follow-up comment to a Feedback comment a user has left for someone else. This response has no
 * call-specific output fields.
 **/
class RespondToFeedbackResponseType extends EbatNs_Response
{
    const TAG = 'RespondToFeedbackResponseType';
    const NAME = 'RespondToFeedbackResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

RespondToFeedbackResponseType::_register();
