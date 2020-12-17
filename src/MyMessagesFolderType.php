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
 * Details relating to a My Messages folder.
 **/
class MyMessagesFolderType extends EbatNs_ComplexType
{
    const TAG = 'MyMessagesFolderType';
    const NAME = 'MyMessagesFolderType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $FolderID = null;

    /**
     * @var string|null
     */
    protected $FolderName = null;


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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'FolderID' => ['type' => 'int'],
            'FolderName' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MyMessagesFolderType::_register();
