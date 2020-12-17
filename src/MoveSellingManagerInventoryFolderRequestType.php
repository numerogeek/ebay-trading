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
 * Moves a Selling Manager inventory folder.
 * 
 * This call is subject to change without notice; the deprecation process is
 * inapplicable to this call. This call is only applicable and accessible by eBay sellers with a Selling Manager
 * Pro subscription.
 **/
class MoveSellingManagerInventoryFolderRequestType extends AbstractRequestType
{
    const TAG = 'MoveSellingManagerInventoryFolderRequest';
    const NAME = 'MoveSellingManagerInventoryFolderRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'MoveSellingManagerInventoryFolder';

    /**
     * @var int|null
     */
    protected $FolderID = null;

    /**
     * @var int|null
     */
    protected $NewParentFolderID = null;


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
    public function getNewParentFolderID()
    {
        return $this->_dc($this->NewParentFolderID, 'NewParentFolderID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setNewParentFolderID($value)
    {
        $this->NewParentFolderID = self::_int($value);
    }

    /**
     * @return MoveSellingManagerInventoryFolderResponseType|EbatNs_ResponseError
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
            'NewParentFolderID' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MoveSellingManagerInventoryFolderRequestType::_register();
