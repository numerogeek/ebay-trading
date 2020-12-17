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
 * This is the base response type of the
 * GetItemsAwaitingFeedback
 * call. This call retrieves all completed order line items for which the user (buyer or seller) still needs to
 * leave Feedback for their order partner.
 **/
class GetItemsAwaitingFeedbackResponseType extends EbatNs_Response
{
    const TAG = 'GetItemsAwaitingFeedbackResponseType';
    const NAME = 'GetItemsAwaitingFeedbackResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var PaginatedTransactionArrayType|null
     */
    protected $ItemsAwaitingFeedback = null;


    /**
     * @return PaginatedTransactionArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemsAwaitingFeedback()
    {
        return $this->_dc($this->ItemsAwaitingFeedback, 'ItemsAwaitingFeedback');
    }

    /**
     * @param PaginatedTransactionArrayType|null $value
     * @return void
     */
    public function setItemsAwaitingFeedback($value)
    {
        $this->ItemsAwaitingFeedback = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['ItemsAwaitingFeedback' => ['type' => 'PaginatedTransactionArrayType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

GetItemsAwaitingFeedbackResponseType::_register();
