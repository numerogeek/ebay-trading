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
 * Revises a Selling Manager Product.
 * 
 * This call is subject to change without notice; the
 * deprecation process is inapplicable to this call. The user must have a Selling Manager Pro subscription to
 * use this call.
 **/
class ReviseSellingManagerProductRequestType extends AbstractRequestType
{
    const TAG = 'ReviseSellingManagerProductRequest';
    const NAME = 'ReviseSellingManagerProductRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'ReviseSellingManagerProduct';

    /**
     * @var SellingManagerProductDetailsType|null
     */
    protected $SellingManagerProductDetails = null;

    /**
     * @var SellingManagerFolderDetailsType|null
     */
    protected $SellingManagerFolderDetails = null;

    /**
     * @var string[]|null
     */
    protected $DeletedField = [];

    /**
     * @var SellingManagerProductSpecificsType|null
     */
    protected $SellingManagerProductSpecifics = null;


    /**
     * @return SellingManagerProductDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellingManagerProductDetails()
    {
        return $this->_dc($this->SellingManagerProductDetails, 'SellingManagerProductDetails');
    }

    /**
     * @param SellingManagerProductDetailsType|null $value
     * @return void
     */
    public function setSellingManagerProductDetails($value)
    {
        $this->SellingManagerProductDetails = $value;
    }

    /**
     * @return SellingManagerFolderDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellingManagerFolderDetails()
    {
        return $this->_dc($this->SellingManagerFolderDetails, 'SellingManagerFolderDetails');
    }

    /**
     * @param SellingManagerFolderDetailsType|null $value
     * @return void
     */
    public function setSellingManagerFolderDetails($value)
    {
        $this->SellingManagerFolderDetails = $value;
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
     * @return SellingManagerProductSpecificsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellingManagerProductSpecifics()
    {
        return $this->_dc($this->SellingManagerProductSpecifics, 'SellingManagerProductSpecifics');
    }

    /**
     * @param SellingManagerProductSpecificsType|null $value
     * @return void
     */
    public function setSellingManagerProductSpecifics($value)
    {
        $this->SellingManagerProductSpecifics = $value;
    }

    /**
     * @return ReviseSellingManagerProductResponseType|EbatNs_ResponseError
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
            'SellingManagerProductDetails' => ['type' => 'SellingManagerProductDetailsType', 'xmlns' => self::XMLNS],
            'SellingManagerFolderDetails' => ['type' => 'SellingManagerFolderDetailsType', 'xmlns' => self::XMLNS],
            'DeletedField' => ['cardinality' => '0..*'],
            'SellingManagerProductSpecifics' => ['type' => 'SellingManagerProductSpecificsType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ReviseSellingManagerProductRequestType::_register();
