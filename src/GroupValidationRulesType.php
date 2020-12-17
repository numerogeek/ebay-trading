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
 * This type is used to specify how many of the corresponding Product Identifier types are required to be specified
 * at listing time.
 * 
 * <span class="tablenote"><strong>Note:</strong>
 * This type and the
 * ProductIdentifiers
 * container was originally introduced into the Trading schema with the intention of separating Global Trade Item
 * Numbers (GTINs) and other descriptive item specifics, but
 * ProductIdentifiers
 * container was never wired on/returned in
 * GetCategorySpecifics
 * . Instead, users will still find one or more relevant GTIN types under a
 * Recommendations.NameRecommendation.Name
 * field.
 * </span>
 **/
class GroupValidationRulesType extends EbatNs_ComplexType
{
    const TAG = 'GroupValidationRulesType';
    const NAME = 'GroupValidationRulesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $MinRequired = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMinRequired()
    {
        return $this->_dc($this->MinRequired, 'MinRequired');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMinRequired($value)
    {
        $this->MinRequired = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['MinRequired' => ['type' => 'int']], parent::NAME);
        self::assignAttributes([]);
    }

}

GroupValidationRulesType::_register();
