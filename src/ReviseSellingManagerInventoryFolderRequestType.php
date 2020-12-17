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
 * This call is uses to rename and/or move a Selling Manager Inventory folder.
 * This call is subject to change without notice; the deprecation process is
 * inapplicable to this call. The user must have a Selling Manager Pro subscription to use this call.
 **/
class ReviseSellingManagerInventoryFolderRequestType extends AbstractRequestType
{
    const TAG = 'ReviseSellingManagerInventoryFolderRequest';
    const NAME = 'ReviseSellingManagerInventoryFolderRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'ReviseSellingManagerInventoryFolder';

    /**
     * @var SellingManagerFolderDetailsType|null
     */
    protected $Folder = null;


    /**
     * @return SellingManagerFolderDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFolder()
    {
        return $this->_dc($this->Folder, 'Folder');
    }

    /**
     * @param SellingManagerFolderDetailsType|null $value
     * @return void
     */
    public function setFolder($value)
    {
        $this->Folder = $value;
    }

    /**
     * @return ReviseSellingManagerInventoryFolderResponseType|EbatNs_ResponseError
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
        self::assignElements(['Folder' => ['type' => 'SellingManagerFolderDetailsType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

ReviseSellingManagerInventoryFolderRequestType::_register();
