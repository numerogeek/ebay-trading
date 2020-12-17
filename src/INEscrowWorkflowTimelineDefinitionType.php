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
 * <span class="tablenote">
 * Note:
 * This type is deprecated since it is only applicable to the eBay India site, and this marketplace is no longer
 * available.</span>
 **/
class INEscrowWorkflowTimelineDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'INEscrowWorkflowTimelineDefinitionType';
    const NAME = 'INEscrowWorkflowTimelineDefinitionType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

INEscrowWorkflowTimelineDefinitionType::_register();
