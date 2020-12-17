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
 * Retrieves Selling Manager Inventory folders.
 * This call is subject to change without notice; the deprecation process is
 * inapplicable to this call. The user must have a Selling Manager Pro subscription to use this call.
 **/
class GetSellingManagerInventoryFolderRequestType extends AbstractRequestType
{
    const TAG = 'GetSellingManagerInventoryFolderRequest';
    const NAME = 'GetSellingManagerInventoryFolderRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetSellingManagerInventoryFolder';

    /**
     * @var int|null
     */
    protected $FolderID = null;

    /**
     * @var int|null
     */
    protected $MaxDepth = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $FullRecursion = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFolderID()
    {
        return $this->_dc($this->FolderID, 'FolderID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setFolderID($value)
    {
        $this->FolderID = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxDepth()
    {
        return $this->_dc($this->MaxDepth, 'MaxDepth');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMaxDepth($value)
    {
        $this->MaxDepth = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFullRecursion()
    {
        return $this->_dc($this->FullRecursion === 'true', 'FullRecursion');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setFullRecursion($value)
    {
        $this->FullRecursion = self::_bool($value);
    }

    /**
     * @return GetSellingManagerInventoryFolderResponseType|EbatNs_ResponseError
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
            'FolderID' => ['type' => 'int'],
            'MaxDepth' => ['type' => 'int'],
            'FullRecursion' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetSellingManagerInventoryFolderRequestType::_register();
