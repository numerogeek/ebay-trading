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
 * This type is deprecated.
 **/
class BidAssistantListType extends EbatNs_ComplexType
{
    const TAG = 'BidAssistantListType';
    const NAME = 'BidAssistantListType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $BidGroupID = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeNotes = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBidGroupID()
    {
        return $this->_dc($this->BidGroupID, 'BidGroupID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setBidGroupID($value)
    {
        $this->BidGroupID = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeNotes()
    {
        return $this->_dc($this->IncludeNotes === 'true', 'IncludeNotes');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeNotes($value)
    {
        $this->IncludeNotes = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'BidGroupID' => ['type' => 'int'],
            'IncludeNotes' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

BidAssistantListType::_register();
