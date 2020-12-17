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
 * Type defining
 * CustomPage
 * container, which is used by a seller in
 * 
 * SetStoreCustomPage
 * to configure and create an eBay Store custom
 * page. The
 * CustomPage
 * container can also be used to modify an
 * existing custom page (by including a
 * PageID
 * value). The
 * 
 * CustomPage
 * container is always returned in the
 * 
 * GetStoreCustomPage
 * response.
 **/
class StoreCustomPageType extends EbatNs_ComplexType
{
    const TAG = 'StoreCustomPageType';
    const NAME = 'StoreCustomPageType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Name = null;

    /**
     * @var int|null
     */
    protected $PageID = null;

    /**
     * @var string|null
     */
    protected $URLPath = null;

    /**
     * @var string|null
     */
    protected $URL = null;

    /**
     * @var StoreCustomPageStatusCodeType|null
     */
    protected $Status = null;

    /**
     * @var string|null
     */
    protected $Content = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $LeftNav = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $PreviewEnabled = null;

    /**
     * @var int|null
     */
    protected $Order = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getName()
    {
        return $this->_dc($this->Name, 'Name');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setName($value)
    {
        $this->Name = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPageID()
    {
        return $this->_dc($this->PageID, 'PageID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPageID($value)
    {
        $this->PageID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getURLPath()
    {
        return $this->_dc($this->URLPath, 'URLPath');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setURLPath($value)
    {
        $this->URLPath = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getURL()
    {
        return $this->_dc($this->URL, 'URL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setURL($value)
    {
        $this->URL = self::_string($value);
    }

    /**
     * @return StoreCustomPageStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStatus()
    {
        return $this->_dc($this->Status);
    }

    /**
     * @param StoreCustomPageStatusCodeType|null $value
     * @return void
     */
    public function setStatus($value)
    {
        $this->Status = $this->_enum($value, StoreCustomPageStatusCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getContent()
    {
        return $this->_dc($this->Content, 'Content');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setContent($value)
    {
        $this->Content = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLeftNav()
    {
        return $this->_dc($this->LeftNav === 'true', 'LeftNav');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setLeftNav($value)
    {
        $this->LeftNav = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPreviewEnabled()
    {
        return $this->_dc($this->PreviewEnabled === 'true', 'PreviewEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setPreviewEnabled($value)
    {
        $this->PreviewEnabled = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrder()
    {
        return $this->_dc($this->Order, 'Order');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setOrder($value)
    {
        $this->Order = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Name' => [],
            'PageID' => ['type' => 'int'],
            'URLPath' => [],
            'URL' => [],
            'Status' => ['type' => 'StoreCustomPageStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Content' => [],
            'LeftNav' => ['type' => 'bool'],
            'PreviewEnabled' => ['type' => 'bool'],
            'Order' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

StoreCustomPageType::_register();
