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
 * This type is used by the
 * RelevanceIndicator
 * container, which is returned for an item specific if eBay has data on how many eBay users have searched for an
 * item in the category using that item specific.
 * 
 * 
 * <span class="tablenote">
 * Note:
 * This container is restricted to applications that have been granted permission to access this feature. You
 * must submit an <a href="https://developer.ebay.com/my/support/tickets?tab=app-check" target="_blank">App Check
 * ticket</a> to request this access. In the App Check form, add a note to the
 * Application Title/Summary
 * and/or
 * Application Details
 * fields that you want access to 'Buyer Demand Data' in
 * GetCategorySpecifics
 * .
 * </span>
 **/
class RelevanceIndicatorType extends EbatNs_ComplexType
{
    const TAG = 'RelevanceIndicatorType';
    const NAME = 'RelevanceIndicatorType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $SearchCount = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSearchCount()
    {
        return $this->_dc($this->SearchCount, 'SearchCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setSearchCount($value)
    {
        $this->SearchCount = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['SearchCount' => ['type' => 'int']], parent::NAME);
        self::assignAttributes([]);
    }

}

RelevanceIndicatorType::_register();
