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
 * Revises a Selling Manager template.
 * This call is subject to change without notice; the
 * deprecation process is inapplicable to this call. The user must have a Selling Manager Pro subscription to
 * use this call.
 **/
class ReviseSellingManagerTemplateRequestType extends AbstractRequestType
{
    const TAG = 'ReviseSellingManagerTemplateRequest';
    const NAME = 'ReviseSellingManagerTemplateRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'ReviseSellingManagerTemplate';

    /**
     * @var int|null
     */
    protected $SaleTemplateID = null;

    /**
     * @var int|null
     */
    protected $ProductID = null;

    /**
     * @var string|null
     */
    protected $SaleTemplateName = null;

    /**
     * @var ItemType|null
     */
    protected $Item = null;

    /**
     * @var string[]|null
     */
    protected $DeletedField = [];

    /**
     * @var bool|null "true" or "false"
     */
    protected $VerifyOnly = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSaleTemplateID()
    {
        return $this->_dc($this->SaleTemplateID, 'SaleTemplateID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setSaleTemplateID($value)
    {
        $this->SaleTemplateID = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProductID()
    {
        return $this->_dc($this->ProductID, 'ProductID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setProductID($value)
    {
        $this->ProductID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSaleTemplateName()
    {
        return $this->_dc($this->SaleTemplateName, 'SaleTemplateName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSaleTemplateName($value)
    {
        $this->SaleTemplateName = self::_string($value);
    }

    /**
     * @return ItemType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItem()
    {
        return $this->_dc($this->Item, 'Item');
    }

    /**
     * @param ItemType|null $value
     * @return void
     */
    public function setItem($value)
    {
        $this->Item = $value;
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getDeletedField($index = null)
    {
        return $this->_dc($index === null
            ? $this->DeletedField
            : (count($this->DeletedField) > $index
                ? $this->DeletedField[$index]
                : null), 'DeletedField');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setDeletedField($value, $index = null)
    {
        if ($index === null) {
            $this->DeletedField = $value;
        } else {
            $this->DeletedField[$index] = [];
            
            foreach ($value as $item) {
                $this->addDeletedField($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addDeletedField($value)
    {
        $this->DeletedField[] = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVerifyOnly()
    {
        return $this->_dc($this->VerifyOnly === 'true', 'VerifyOnly');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setVerifyOnly($value)
    {
        $this->VerifyOnly = self::_bool($value);
    }

    /**
     * @return ReviseSellingManagerTemplateResponseType|EbatNs_ResponseError
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
            'SaleTemplateID' => ['type' => 'int'],
            'ProductID' => ['type' => 'int'],
            'SaleTemplateName' => [],
            'Item' => ['type' => 'ItemType', 'xmlns' => self::XMLNS],
            'DeletedField' => ['cardinality' => '0..*'],
            'VerifyOnly' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ReviseSellingManagerTemplateRequestType::_register();
