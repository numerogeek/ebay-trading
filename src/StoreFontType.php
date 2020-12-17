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
 * Store font set.
 **/
class StoreFontType extends EbatNs_ComplexType
{
    const TAG = 'StoreFontType';
    const NAME = 'StoreFontType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var StoreFontFaceCodeType|null
     */
    protected $NameFace = null;

    /**
     * @var StoreFontSizeCodeType|null
     */
    protected $NameSize = null;

    /**
     * @var string|null
     */
    protected $NameColor = null;

    /**
     * @var StoreFontFaceCodeType|null
     */
    protected $TitleFace = null;

    /**
     * @var StoreFontSizeCodeType|null
     */
    protected $TitleSize = null;

    /**
     * @var string|null
     */
    protected $TitleColor = null;

    /**
     * @var StoreFontFaceCodeType|null
     */
    protected $DescFace = null;

    /**
     * @var StoreFontSizeCodeType|null
     */
    protected $DescSize = null;

    /**
     * @var string|null
     */
    protected $DescColor = null;


    /**
     * @return StoreFontFaceCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNameFace()
    {
        return $this->_dc($this->NameFace);
    }

    /**
     * @param StoreFontFaceCodeType|null $value
     * @return void
     */
    public function setNameFace($value)
    {
        $this->NameFace = $this->_enum($value, StoreFontFaceCodeType::class);
    }

    /**
     * @return StoreFontSizeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNameSize()
    {
        return $this->_dc($this->NameSize);
    }

    /**
     * @param StoreFontSizeCodeType|null $value
     * @return void
     */
    public function setNameSize($value)
    {
        $this->NameSize = $this->_enum($value, StoreFontSizeCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNameColor()
    {
        return $this->_dc($this->NameColor, 'NameColor');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setNameColor($value)
    {
        $this->NameColor = self::_string($value);
    }

    /**
     * @return StoreFontFaceCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTitleFace()
    {
        return $this->_dc($this->TitleFace);
    }

    /**
     * @param StoreFontFaceCodeType|null $value
     * @return void
     */
    public function setTitleFace($value)
    {
        $this->TitleFace = $this->_enum($value, StoreFontFaceCodeType::class);
    }

    /**
     * @return StoreFontSizeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTitleSize()
    {
        return $this->_dc($this->TitleSize);
    }

    /**
     * @param StoreFontSizeCodeType|null $value
     * @return void
     */
    public function setTitleSize($value)
    {
        $this->TitleSize = $this->_enum($value, StoreFontSizeCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTitleColor()
    {
        return $this->_dc($this->TitleColor, 'TitleColor');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTitleColor($value)
    {
        $this->TitleColor = self::_string($value);
    }

    /**
     * @return StoreFontFaceCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDescFace()
    {
        return $this->_dc($this->DescFace);
    }

    /**
     * @param StoreFontFaceCodeType|null $value
     * @return void
     */
    public function setDescFace($value)
    {
        $this->DescFace = $this->_enum($value, StoreFontFaceCodeType::class);
    }

    /**
     * @return StoreFontSizeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDescSize()
    {
        return $this->_dc($this->DescSize);
    }

    /**
     * @param StoreFontSizeCodeType|null $value
     * @return void
     */
    public function setDescSize($value)
    {
        $this->DescSize = $this->_enum($value, StoreFontSizeCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDescColor()
    {
        return $this->_dc($this->DescColor, 'DescColor');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDescColor($value)
    {
        $this->DescColor = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'NameFace' => ['type' => 'StoreFontFaceCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'NameSize' => ['type' => 'StoreFontSizeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'NameColor' => [],
            'TitleFace' => ['type' => 'StoreFontFaceCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'TitleSize' => ['type' => 'StoreFontSizeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'TitleColor' => [],
            'DescFace' => ['type' => 'StoreFontFaceCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'DescSize' => ['type' => 'StoreFontSizeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'DescColor' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

StoreFontType::_register();
