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
 * Returns a list of disputes that involve the calling user
 * as buyer or seller, in response to a
 * GetUserDisputesRequest
 * .
 **/
class GetUserDisputesResponseType extends EbatNs_Response
{
    const TAG = 'GetUserDisputesResponseType';
    const NAME = 'GetUserDisputesResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var DisputeIDType|null
     */
    protected $StartingDisputeID = null;

    /**
     * @var DisputeIDType|null
     */
    protected $EndingDisputeID = null;

    /**
     * @var DisputeArrayType|null
     */
    protected $DisputeArray = null;

    /**
     * @var int|null
     */
    protected $ItemsPerPage = null;

    /**
     * @var int|null
     */
    protected $PageNumber = null;

    /**
     * @var DisputeFilterCountType[]|null
     */
    protected $DisputeFilterCount = [];

    /**
     * @var PaginationResultType|null
     */
    protected $PaginationResult = null;


    /**
     * @return DisputeIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStartingDisputeID()
    {
        return $this->_dc($this->StartingDisputeID, 'StartingDisputeID');
    }

    /**
     * @param DisputeIDType|null $value
     * @return void
     */
    public function setStartingDisputeID($value)
    {
        $this->StartingDisputeID = $value;
    }

    /**
     * @return DisputeIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEndingDisputeID()
    {
        return $this->_dc($this->EndingDisputeID, 'EndingDisputeID');
    }

    /**
     * @param DisputeIDType|null $value
     * @return void
     */
    public function setEndingDisputeID($value)
    {
        $this->EndingDisputeID = $value;
    }

    /**
     * @return DisputeArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisputeArray()
    {
        return $this->_dc($this->DisputeArray, 'DisputeArray');
    }

    /**
     * @param DisputeArrayType|null $value
     * @return void
     */
    public function setDisputeArray($value)
    {
        $this->DisputeArray = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemsPerPage()
    {
        return $this->_dc($this->ItemsPerPage, 'ItemsPerPage');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setItemsPerPage($value)
    {
        $this->ItemsPerPage = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPageNumber()
    {
        return $this->_dc($this->PageNumber, 'PageNumber');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPageNumber($value)
    {
        $this->PageNumber = self::_int($value);
    }

    /**
     * @return DisputeFilterCountType[]|DisputeFilterCountType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getDisputeFilterCount($index = null)
    {
        return $this->_dc($index === null
            ? $this->DisputeFilterCount
            : (count($this->DisputeFilterCount) > $index
                ? $this->DisputeFilterCount[$index]
                : null), 'DisputeFilterCount');
    }

    /**
     * @param DisputeFilterCountType|null|DisputeFilterCountType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setDisputeFilterCount($value, $index = null)
    {
        if ($index === null) {
            $this->DisputeFilterCount = $value;
        } else {
            $this->DisputeFilterCount[$index] = [];
            
            foreach ($value as $item) {
                $this->addDisputeFilterCount($item);
            }
        }
    }

    /**
     * @param DisputeFilterCountType|null $value
     * @return void
     */
    public function addDisputeFilterCount($value)
    {
        $this->DisputeFilterCount[] = $value;
    }

    /**
     * @return PaginationResultType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaginationResult()
    {
        return $this->_dc($this->PaginationResult, 'PaginationResult');
    }

    /**
     * @param PaginationResultType|null $value
     * @return void
     */
    public function setPaginationResult($value)
    {
        $this->PaginationResult = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'StartingDisputeID' => ['type' => 'DisputeIDType', 'xmlns' => self::XMLNS],
            'EndingDisputeID' => ['type' => 'DisputeIDType', 'xmlns' => self::XMLNS],
            'DisputeArray' => ['type' => 'DisputeArrayType', 'xmlns' => self::XMLNS],
            'ItemsPerPage' => ['type' => 'int'],
            'PageNumber' => ['type' => 'int'],
            'DisputeFilterCount' => ['type' => 'DisputeFilterCountType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'PaginationResult' => ['type' => 'PaginationResultType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetUserDisputesResponseType::_register();
