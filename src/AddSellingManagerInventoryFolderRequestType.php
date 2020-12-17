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
 * Adds a new product folder to a user's Selling Manager account.
 **/
class AddSellingManagerInventoryFolderRequestType extends AbstractRequestType
{
    const TAG = 'AddSellingManagerInventoryFolderRequest';
    const NAME = 'AddSellingManagerInventoryFolderRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'AddSellingManagerInventoryFolder';

    /**
     * @var string|null
     */
    protected $FolderName = null;

    /**
     * @var int|null
     */
    protected $ParentFolderID = null;

    /**
     * @var string|null
     */
    protected $Comment = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFolderName()
    {
        return $this->_dc($this->FolderName, 'FolderName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setFolderName($value)
    {
        $this->FolderName = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getParentFolderID()
    {
        return $this->_dc($this->ParentFolderID, 'ParentFolderID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setParentFolderID($value)
    {
        $this->ParentFolderID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getComment()
    {
        return $this->_dc($this->Comment, 'Comment');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setComment($value)
    {
        $this->Comment = self::_string($value);
    }

    /**
     * @return AddSellingManagerInventoryFolderResponseType|EbatNs_ResponseError
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
            'FolderName' => [],
            'ParentFolderID' => ['type' => 'int'],
            'Comment' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AddSellingManagerInventoryFolderRequestType::_register();
