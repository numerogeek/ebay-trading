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
 * Type used by the <strong>SellingManagerTemplateDetailsArray</strong> container that is returned in the
 * <strong>GetSellingManagerInventory</strong> and <strong>GetSellingManagerTemplates</strong> calls. The
 * <strong>SellingManagerTemplateDetailsArray</strong> container consists of one or more Selling Manager Templates
 * that match the input criteria.
 **/
class SellingManagerTemplateDetailsArrayType extends EbatNs_ComplexType
{
    const TAG = 'SellingManagerTemplateDetailsArrayType';
    const NAME = 'SellingManagerTemplateDetailsArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SellingManagerTemplateDetailsType[]|null
     */
    protected $SellingManagerTemplateDetails = [];


    /**
     * @return SellingManagerTemplateDetailsType[]|SellingManagerTemplateDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getSellingManagerTemplateDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->SellingManagerTemplateDetails
            : (count($this->SellingManagerTemplateDetails) > $index
                ? $this->SellingManagerTemplateDetails[$index]
                : null), 'SellingManagerTemplateDetails');
    }

    /**
     * @param SellingManagerTemplateDetailsType|null|SellingManagerTemplateDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setSellingManagerTemplateDetails($value, $index = null)
    {
        if ($index === null) {
            $this->SellingManagerTemplateDetails = $value;
        } else {
            $this->SellingManagerTemplateDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addSellingManagerTemplateDetails($item);
            }
        }
    }

    /**
     * @param SellingManagerTemplateDetailsType|null $value
     * @return void
     */
    public function addSellingManagerTemplateDetails($value)
    {
        $this->SellingManagerTemplateDetails[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['SellingManagerTemplateDetails' => ['type' => 'SellingManagerTemplateDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

SellingManagerTemplateDetailsArrayType::_register();
