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
 * Returns the log of emails not sent.
 **/
class GetSellingManagerEmailLogResponseType extends EbatNs_Response
{
    const TAG = 'GetSellingManagerEmailLogResponseType';
    const NAME = 'GetSellingManagerEmailLogResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SellingManagerEmailLogType[]|null
     */
    protected $EmailLog = [];


    /**
     * @return SellingManagerEmailLogType[]|SellingManagerEmailLogType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getEmailLog($index = null)
    {
        return $this->_dc($index === null
            ? $this->EmailLog
            : (count($this->EmailLog) > $index
                ? $this->EmailLog[$index]
                : null), 'EmailLog');
    }

    /**
     * @param SellingManagerEmailLogType|null|SellingManagerEmailLogType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setEmailLog($value, $index = null)
    {
        if ($index === null) {
            $this->EmailLog = $value;
        } else {
            $this->EmailLog[$index] = [];
            
            foreach ($value as $item) {
                $this->addEmailLog($item);
            }
        }
    }

    /**
     * @param SellingManagerEmailLogType|null $value
     * @return void
     */
    public function addEmailLog($value)
    {
        $this->EmailLog[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['EmailLog' => ['type' => 'SellingManagerEmailLogType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

GetSellingManagerEmailLogResponseType::_register();
