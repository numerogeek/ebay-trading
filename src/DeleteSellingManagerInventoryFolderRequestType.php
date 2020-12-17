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
 * Removes an inventory folder when a user deletes it in My eBay. This call is subject to change without notice; the
 * deprecation process is inapplicable to this call.
 **/
class DeleteSellingManagerInventoryFolderRequestType extends AbstractRequestType
{
    const TAG = 'DeleteSellingManagerInventoryFolderRequest';
    const NAME = 'DeleteSellingManagerInventoryFolderRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'DeleteSellingManagerInventoryFolder';

    /**
     * @var int|null
     */
    protected $FolderID = null;


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
     * @return DeleteSellingManagerInventoryFolderResponseType|EbatNs_ResponseError
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
        self::assignElements(['FolderID' => ['type' => 'int']], parent::NAME);
        self::assignAttributes([]);
    }

}

DeleteSellingManagerInventoryFolderRequestType::_register();
