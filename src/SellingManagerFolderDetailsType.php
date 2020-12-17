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
 * Contains information about a Selling Manager folder.
 **/
class SellingManagerFolderDetailsType extends EbatNs_ComplexType
{
    const TAG = 'SellingManagerFolderDetailsType';
    const NAME = 'SellingManagerFolderDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $FolderID = null;

    /**
     * @var int|null
     */
    protected $ParentFolderID = null;

    /**
     * @var int|null
     */
    protected $FolderLevel = null;

    /**
     * @var string|null
     */
    protected $FolderName = null;

    /**
     * @var string|null
     */
    protected $FolderComment = null;

    /**
     * @var SellingManagerFolderDetailsType[]|null
     */
    protected $ChildFolder = [];

    /**
     * @var string|null
     */
    protected $CreationTime = null;


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
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFolderLevel()
    {
        return $this->_dc($this->FolderLevel, 'FolderLevel');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setFolderLevel($value)
    {
        $this->FolderLevel = self::_int($value);
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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFolderComment()
    {
        return $this->_dc($this->FolderComment, 'FolderComment');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setFolderComment($value)
    {
        $this->FolderComment = self::_string($value);
    }

    /**
     * @return SellingManagerFolderDetailsType[]|SellingManagerFolderDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getChildFolder($index = null)
    {
        return $this->_dc($index === null
            ? $this->ChildFolder
            : (count($this->ChildFolder) > $index
                ? $this->ChildFolder[$index]
                : null), 'ChildFolder');
    }

    /**
     * @param SellingManagerFolderDetailsType|null|SellingManagerFolderDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setChildFolder($value, $index = null)
    {
        if ($index === null) {
            $this->ChildFolder = $value;
        } else {
            $this->ChildFolder[$index] = [];
            
            foreach ($value as $item) {
                $this->addChildFolder($item);
            }
        }
    }

    /**
     * @param SellingManagerFolderDetailsType|null $value
     * @return void
     */
    public function addChildFolder($value)
    {
        $this->ChildFolder[] = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCreationTime()
    {
        return $this->_dc($this->CreationTime, 'CreationTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCreationTime($value)
    {
        $this->CreationTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'FolderID' => ['type' => 'int'],
            'ParentFolderID' => ['type' => 'int'],
            'FolderLevel' => ['type' => 'int'],
            'FolderName' => [],
            'FolderComment' => [],
            'ChildFolder' => ['type' => 'SellingManagerFolderDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'CreationTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellingManagerFolderDetailsType::_register();
