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
 * Retrieves Selling Manager templates. This call is subject to change without notice; the deprecation process is
 * inapplicable to this call. The user must have a Selling Manager Pro subscription to use this call.
 **/
class GetSellingManagerTemplatesRequestType extends AbstractRequestType
{
    const TAG = 'GetSellingManagerTemplatesRequest';
    const NAME = 'GetSellingManagerTemplatesRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetSellingManagerTemplates';

    /**
     * @var int[]|null
     */
    protected $SaleTemplateID = [];


    /**
     * @return int[]|int|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getSaleTemplateID($index = null)
    {
        return $this->_dc($index === null
            ? $this->SaleTemplateID
            : (count($this->SaleTemplateID) > $index
                ? $this->SaleTemplateID[$index]
                : null), 'SaleTemplateID');
    }

    /**
     * @param int|null|int[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setSaleTemplateID($value, $index = null)
    {
        if ($index === null) {
            $this->SaleTemplateID = $value;
        } else {
            $this->SaleTemplateID[$index] = [];
            
            foreach ($value as $item) {
                $this->addSaleTemplateID($item);
            }
        }
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function addSaleTemplateID($value)
    {
        $this->SaleTemplateID[] = self::_int($value);
    }

    /**
     * @return GetSellingManagerTemplatesResponseType|EbatNs_ResponseError
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
        self::assignElements(['SaleTemplateID' => ['type' => 'int', 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

GetSellingManagerTemplatesRequestType::_register();
