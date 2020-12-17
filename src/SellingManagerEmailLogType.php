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
 * Contains list of Email log.
 **/
class SellingManagerEmailLogType extends EbatNs_ComplexType
{
    const TAG = 'SellingManagerEmailLogType';
    const NAME = 'SellingManagerEmailLogType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SellingManagerEmailTypeCodeType|null
     */
    protected $EmailType = null;

    /**
     * @var string|null
     */
    protected $CustomEmailName = null;

    /**
     * @var SellingManagerEmailSentStatusCodeType|null
     */
    protected $EmailState = null;

    /**
     * @var string|null
     */
    protected $EventTime = null;


    /**
     * @return SellingManagerEmailTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEmailType()
    {
        return $this->_dc($this->EmailType);
    }

    /**
     * @param SellingManagerEmailTypeCodeType|null $value
     * @return void
     */
    public function setEmailType($value)
    {
        $this->EmailType = $this->_enum($value, SellingManagerEmailTypeCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCustomEmailName()
    {
        return $this->_dc($this->CustomEmailName, 'CustomEmailName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCustomEmailName($value)
    {
        $this->CustomEmailName = self::_string($value);
    }

    /**
     * @return SellingManagerEmailSentStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEmailState()
    {
        return $this->_dc($this->EmailState);
    }

    /**
     * @param SellingManagerEmailSentStatusCodeType|null $value
     * @return void
     */
    public function setEmailState($value)
    {
        $this->EmailState = $this->_enum($value, SellingManagerEmailSentStatusCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEventTime()
    {
        return $this->_dc($this->EventTime, 'EventTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEventTime($value)
    {
        $this->EventTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'EmailType' => ['type' => 'SellingManagerEmailTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'CustomEmailName' => [],
            'EmailState' => ['type' => 'SellingManagerEmailSentStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'EventTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellingManagerEmailLogType::_register();
