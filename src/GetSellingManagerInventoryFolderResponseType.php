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
 * Returns the folder structure of the specified Selling Manager Inventory folder.
 **/
class GetSellingManagerInventoryFolderResponseType extends EbatNs_Response
{
    const TAG = 'GetSellingManagerInventoryFolderResponseType';
    const NAME = 'GetSellingManagerInventoryFolderResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Folder' => ['type' => 'SellingManagerFolderDetailsType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

GetSellingManagerInventoryFolderResponseType::_register();
