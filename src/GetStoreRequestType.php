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
 * This call is used to retrieve detailed information on a seller's eBay Store, including store theme information
 * and eBay Store category hierarchy.
 **/
class GetStoreRequestType extends AbstractRequestType
{
    const TAG = 'GetStoreRequest';
    const NAME = 'GetStoreRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetStore';

    /**
     * @var bool|null "true" or "false"
     */
    protected $CategoryStructureOnly = null;

    /**
     * @var int|null
     */
    protected $RootCategoryID = null;

    /**
     * @var int|null
     */
    protected $LevelLimit = null;

    /**
     * @var UserIDType|null
     */
    protected $UserID = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategoryStructureOnly()
    {
        return $this->_dc($this->CategoryStructureOnly === 'true', 'CategoryStructureOnly');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setCategoryStructureOnly($value)
    {
        $this->CategoryStructureOnly = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRootCategoryID()
    {
        return $this->_dc($this->RootCategoryID, 'RootCategoryID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setRootCategoryID($value)
    {
        $this->RootCategoryID = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLevelLimit()
    {
        return $this->_dc($this->LevelLimit, 'LevelLimit');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setLevelLimit($value)
    {
        $this->LevelLimit = self::_int($value);
    }

    /**
     * @return UserIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserID()
    {
        return $this->_dc($this->UserID, 'UserID');
    }

    /**
     * @param UserIDType|null $value
     * @return void
     */
    public function setUserID($value)
    {
        $this->UserID = $value;
    }

    /**
     * @return GetStoreResponseType|EbatNs_ResponseError
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
            'CategoryStructureOnly' => ['type' => 'bool'],
            'RootCategoryID' => ['type' => 'int'],
            'LevelLimit' => ['type' => 'int'],
            'UserID' => ['type' => 'UserIDType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetStoreRequestType::_register();
