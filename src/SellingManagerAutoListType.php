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
 * Provides information about an automated listing rule.
 * Automated listing rules cannot be combined with automated relisting rules.
 * A template can have one set of information per automated listing rule specified.
 **/
class SellingManagerAutoListType extends EbatNs_ComplexType
{
    const TAG = 'SellingManagerAutoListType';
    const NAME = 'SellingManagerAutoListType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $SourceSaleTemplateID = null;

    /**
     * @var SellingManagerAutoListMinActiveItemsType|null
     */
    protected $KeepMinActive = null;

    /**
     * @var SellingManagerAutoListAccordingToScheduleType|null
     */
    protected $ListAccordingToSchedule = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSourceSaleTemplateID()
    {
        return $this->_dc($this->SourceSaleTemplateID, 'SourceSaleTemplateID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setSourceSaleTemplateID($value)
    {
        $this->SourceSaleTemplateID = self::_int($value);
    }

    /**
     * @return SellingManagerAutoListMinActiveItemsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getKeepMinActive()
    {
        return $this->_dc($this->KeepMinActive, 'KeepMinActive');
    }

    /**
     * @param SellingManagerAutoListMinActiveItemsType|null $value
     * @return void
     */
    public function setKeepMinActive($value)
    {
        $this->KeepMinActive = $value;
    }

    /**
     * @return SellingManagerAutoListAccordingToScheduleType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListAccordingToSchedule()
    {
        return $this->_dc($this->ListAccordingToSchedule, 'ListAccordingToSchedule');
    }

    /**
     * @param SellingManagerAutoListAccordingToScheduleType|null $value
     * @return void
     */
    public function setListAccordingToSchedule($value)
    {
        $this->ListAccordingToSchedule = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'SourceSaleTemplateID' => ['type' => 'int'],
            'KeepMinActive' => ['type' => 'SellingManagerAutoListMinActiveItemsType', 'xmlns' => self::XMLNS],
            'ListAccordingToSchedule' => ['type' => 'SellingManagerAutoListAccordingToScheduleType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellingManagerAutoListType::_register();
