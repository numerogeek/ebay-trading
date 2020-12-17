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
 * BidderNoticePreferences
 * container, which consists of the seller's preference for receiving contact information for unsuccessful bidders
 * in auction listings.
 **/
class BidderNoticePreferencesType extends EbatNs_ComplexType
{
    const TAG = 'BidderNoticePreferencesType';
    const NAME = 'BidderNoticePreferencesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $UnsuccessfulBidderNoticeIncludeMyItems = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUnsuccessfulBidderNoticeIncludeMyItems()
    {
        return $this->_dc($this->UnsuccessfulBidderNoticeIncludeMyItems === 'true', 'UnsuccessfulBidderNoticeIncludeMyItems');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setUnsuccessfulBidderNoticeIncludeMyItems($value)
    {
        $this->UnsuccessfulBidderNoticeIncludeMyItems = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['UnsuccessfulBidderNoticeIncludeMyItems' => ['type' => 'bool']], parent::NAME);
        self::assignAttributes([]);
    }

}

BidderNoticePreferencesType::_register();
