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
 * The base response type of the
 * AddSellingManagerInventoryFolder
 * call. Along with the standard Trading API response fields, a
 * FolderID
 * field will be returned if the folder creation operation is successful.
 **/
class AddSellingManagerInventoryFolderResponseType extends EbatNs_Response
{
    const TAG = 'AddSellingManagerInventoryFolderResponseType';
    const NAME = 'AddSellingManagerInventoryFolderResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['FolderID' => ['type' => 'int']], parent::NAME);
        self::assignAttributes([]);
    }

}

AddSellingManagerInventoryFolderResponseType::_register();
