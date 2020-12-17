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
 * Type defining the <strong>UnpaidItem</strong> container, which consists of
 * details related to the type and status of an Unpaid Item case.
 **/
class UnpaidItemType extends EbatNs_ComplexType
{
    const TAG = 'UnpaidItemType';
    const NAME = 'UnpaidItemType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var UnpaidItemCaseStatusTypeCodeType|null
     */
    protected $Status = null;

    /**
     * @var UnpaidItemCaseOpenTypeCodeType|null
     */
    protected $Type = null;


    /**
     * @return UnpaidItemCaseStatusTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStatus()
    {
        return $this->_dc($this->Status);
    }

    /**
     * @param UnpaidItemCaseStatusTypeCodeType|null $value
     * @return void
     */
    public function setStatus($value)
    {
        $this->Status = $this->_enum($value, UnpaidItemCaseStatusTypeCodeType::class);
    }

    /**
     * @return UnpaidItemCaseOpenTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getType()
    {
        return $this->_dc($this->Type);
    }

    /**
     * @param UnpaidItemCaseOpenTypeCodeType|null $value
     * @return void
     */
    public function setType($value)
    {
        $this->Type = $this->_enum($value, UnpaidItemCaseOpenTypeCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Status' => ['type' => 'UnpaidItemCaseStatusTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Type' => ['type' => 'UnpaidItemCaseOpenTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

UnpaidItemType::_register();
