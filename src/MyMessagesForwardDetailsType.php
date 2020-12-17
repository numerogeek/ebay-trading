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
 * This type is deprecated.
 **/
class MyMessagesForwardDetailsType extends EbatNs_ComplexType
{
    const TAG = 'MyMessagesForwardDetailsType';
    const NAME = 'MyMessagesForwardDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $UserForwardDate = null;

    /**
     * @var string|null
     */
    protected $ForwardMessageEncoding = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserForwardDate()
    {
        return $this->_dc($this->UserForwardDate, 'UserForwardDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUserForwardDate($value)
    {
        $this->UserForwardDate = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getForwardMessageEncoding()
    {
        return $this->_dc($this->ForwardMessageEncoding, 'ForwardMessageEncoding');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setForwardMessageEncoding($value)
    {
        $this->ForwardMessageEncoding = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'UserForwardDate' => [],
            'ForwardMessageEncoding' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MyMessagesForwardDetailsType::_register();
