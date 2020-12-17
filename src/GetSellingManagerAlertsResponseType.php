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
 * Type defining the call-specific response fields for the
 * GetSellingManagerAlerts
 * call.
 **/
class GetSellingManagerAlertsResponseType extends EbatNs_Response
{
    const TAG = 'GetSellingManagerAlertsResponseType';
    const NAME = 'GetSellingManagerAlertsResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SellingManagerAlertType[]|null
     */
    protected $Alert = [];


    /**
     * @return SellingManagerAlertType[]|SellingManagerAlertType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getAlert($index = null)
    {
        return $this->_dc($index === null
            ? $this->Alert
            : (count($this->Alert) > $index
                ? $this->Alert[$index]
                : null), 'Alert');
    }

    /**
     * @param SellingManagerAlertType|null|SellingManagerAlertType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setAlert($value, $index = null)
    {
        if ($index === null) {
            $this->Alert = $value;
        } else {
            $this->Alert[$index] = [];
            
            foreach ($value as $item) {
                $this->addAlert($item);
            }
        }
    }

    /**
     * @param SellingManagerAlertType|null $value
     * @return void
     */
    public function addAlert($value)
    {
        $this->Alert[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Alert' => ['type' => 'SellingManagerAlertType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

GetSellingManagerAlertsResponseType::_register();
