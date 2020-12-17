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
 * Custom listing header link.
 **/
class StoreCustomListingHeaderLinkType extends EbatNs_ComplexType
{
    const TAG = 'StoreCustomListingHeaderLinkType';
    const NAME = 'StoreCustomListingHeaderLinkType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $LinkID = null;

    /**
     * @var int|null
     */
    protected $Order = null;

    /**
     * @var StoreCustomListingHeaderLinkCodeType|null
     */
    protected $LinkType = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLinkID()
    {
        return $this->_dc($this->LinkID, 'LinkID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setLinkID($value)
    {
        $this->LinkID = self::_int($value);
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
     * @return StoreCustomListingHeaderLinkCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLinkType()
    {
        return $this->_dc($this->LinkType);
    }

    /**
     * @param StoreCustomListingHeaderLinkCodeType|null $value
     * @return void
     */
    public function setLinkType($value)
    {
        $this->LinkType = $this->_enum($value, StoreCustomListingHeaderLinkCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'LinkID' => ['type' => 'int'],
            'Order' => ['type' => 'int'],
            'LinkType' => ['type' => 'StoreCustomListingHeaderLinkCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

StoreCustomListingHeaderLinkType::_register();
