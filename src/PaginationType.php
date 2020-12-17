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
 * Contains data for controlling pagination in API requests.
 * Pagination of returned data is required for some calls and not
 * needed in or not supported for some calls. See the documentation
 * for individual calls to determine whether pagination is supported,
 * required, or desirable.
 **/
class PaginationType extends EbatNs_ComplexType
{
    const TAG = 'PaginationType';
    const NAME = 'PaginationType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $EntriesPerPage = null;

    /**
     * @var int|null
     */
    protected $PageNumber = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEntriesPerPage()
    {
        return $this->_dc($this->EntriesPerPage, 'EntriesPerPage');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setEntriesPerPage($value)
    {
        $this->EntriesPerPage = self::_int($value);
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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'EntriesPerPage' => ['type' => 'int'],
            'PageNumber' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PaginationType::_register();
