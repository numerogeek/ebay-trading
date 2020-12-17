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
 * This type is used by the
 * VacationPreferences
 * container that is set in a
 * SetStorePreferences
 * call and returned in a
 * GetStorePreferences
 * call.
 **/
class StoreVacationPreferencesType extends EbatNs_ComplexType
{
    const TAG = 'StoreVacationPreferencesType';
    const NAME = 'StoreVacationPreferencesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $OnVacation = null;

    /**
     * @var string|null
     */
    protected $ReturnDate = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $HideFixedPriceStoreItems = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $MessageItem = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $MessageStore = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $DisplayMessageStoreCustomText = null;

    /**
     * @var string|null
     */
    protected $MessageStoreCustomText = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOnVacation()
    {
        return $this->_dc($this->OnVacation === 'true', 'OnVacation');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setOnVacation($value)
    {
        $this->OnVacation = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReturnDate()
    {
        return $this->_dc($this->ReturnDate, 'ReturnDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setReturnDate($value)
    {
        $this->ReturnDate = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHideFixedPriceStoreItems()
    {
        return $this->_dc($this->HideFixedPriceStoreItems === 'true', 'HideFixedPriceStoreItems');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setHideFixedPriceStoreItems($value)
    {
        $this->HideFixedPriceStoreItems = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMessageItem()
    {
        return $this->_dc($this->MessageItem === 'true', 'MessageItem');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setMessageItem($value)
    {
        $this->MessageItem = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMessageStore()
    {
        return $this->_dc($this->MessageStore === 'true', 'MessageStore');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setMessageStore($value)
    {
        $this->MessageStore = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisplayMessageStoreCustomText()
    {
        return $this->_dc($this->DisplayMessageStoreCustomText === 'true', 'DisplayMessageStoreCustomText');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setDisplayMessageStoreCustomText($value)
    {
        $this->DisplayMessageStoreCustomText = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMessageStoreCustomText()
    {
        return $this->_dc($this->MessageStoreCustomText, 'MessageStoreCustomText');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMessageStoreCustomText($value)
    {
        $this->MessageStoreCustomText = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'OnVacation' => ['type' => 'bool'],
            'ReturnDate' => [],
            'HideFixedPriceStoreItems' => ['type' => 'bool'],
            'MessageItem' => ['type' => 'bool'],
            'MessageStore' => ['type' => 'bool'],
            'DisplayMessageStoreCustomText' => ['type' => 'bool'],
            'MessageStoreCustomText' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

StoreVacationPreferencesType::_register();
