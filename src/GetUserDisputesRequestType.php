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
 * Requests a list of disputes the requester is involved in as buyer or seller. eBay Money Back Guarantee Item Not
 * Received and Return cases are not returned with this call. To retrieve eBay Money Back Guarantee cases, use the
 * Search Cases
 * call of the Post-Order API (or alternatively, the
 * getUserCases
 * call of the Resolution Case Management API.
 **/
class GetUserDisputesRequestType extends AbstractRequestType
{
    const TAG = 'GetUserDisputesRequest';
    const NAME = 'GetUserDisputesRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetUserDisputes';

    /**
     * @var DisputeFilterTypeCodeType|null
     */
    protected $DisputeFilterType = null;

    /**
     * @var DisputeSortTypeCodeType|null
     */
    protected $DisputeSortType = null;

    /**
     * @var string|null
     */
    protected $ModTimeFrom = null;

    /**
     * @var string|null
     */
    protected $ModTimeTo = null;

    /**
     * @var PaginationType|null
     */
    protected $Pagination = null;


    /**
     * @return DisputeFilterTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisputeFilterType()
    {
        return $this->_dc($this->DisputeFilterType);
    }

    /**
     * @param DisputeFilterTypeCodeType|null $value
     * @return void
     */
    public function setDisputeFilterType($value)
    {
        $this->DisputeFilterType = $this->_enum($value, DisputeFilterTypeCodeType::class);
    }

    /**
     * @return DisputeSortTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisputeSortType()
    {
        return $this->_dc($this->DisputeSortType);
    }

    /**
     * @param DisputeSortTypeCodeType|null $value
     * @return void
     */
    public function setDisputeSortType($value)
    {
        $this->DisputeSortType = $this->_enum($value, DisputeSortTypeCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getModTimeFrom()
    {
        return $this->_dc($this->ModTimeFrom, 'ModTimeFrom');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setModTimeFrom($value)
    {
        $this->ModTimeFrom = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getModTimeTo()
    {
        return $this->_dc($this->ModTimeTo, 'ModTimeTo');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setModTimeTo($value)
    {
        $this->ModTimeTo = self::_string($value);
    }

    /**
     * @return PaginationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPagination()
    {
        return $this->_dc($this->Pagination, 'Pagination');
    }

    /**
     * @param PaginationType|null $value
     * @return void
     */
    public function setPagination($value)
    {
        $this->Pagination = $value;
    }

    /**
     * @return GetUserDisputesResponseType|EbatNs_ResponseError
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
            'DisputeFilterType' => ['type' => 'DisputeFilterTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'DisputeSortType' => ['type' => 'DisputeSortTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ModTimeFrom' => [],
            'ModTimeTo' => [],
            'Pagination' => ['type' => 'PaginationType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetUserDisputesRequestType::_register();
