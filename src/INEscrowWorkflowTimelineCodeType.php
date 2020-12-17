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
 * This enumerated type is deprecated since it is only applicable to the eBay India site, and this marketplace
 * is no longer available.</span>
 **/
class INEscrowWorkflowTimelineCodeType extends EbatNs_EnumType
{
    const TAG = 'INEscrowWorkflowTimelineCodeType';
    const NAME = 'INEscrowWorkflowTimelineCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Default Escrow timelines apply.
     **/
    const CodeType_Default = 'Default';

    /**
     * Special Escrow timelines for Workflow A applies.
     **/
    const CodeType_WorkflowA = 'WorkflowA';

    /**
     * Special Escrow timelines for Workflow B applies.
     **/
    const CodeType_WorkflowB = 'WorkflowB';

    /**
     * (out) Reserved for internal or future use.
     **/
    const CodeType_CustomCode = 'CustomCode';
    
    /**
     * @var string|null
     */
    protected $_value = null;


    /**
     * @param string|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return INEscrowWorkflowTimelineCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param INEscrowWorkflowTimelineCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isDefault()
    {
        return $this->_value === self::CodeType_Default;
    }

    /**
     * @return bool
     */
    public function isWorkflowA()
    {
        return $this->_value === self::CodeType_WorkflowA;
    }

    /**
     * @return bool
     */
    public function isWorkflowB()
    {
        return $this->_value === self::CodeType_WorkflowB;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

INEscrowWorkflowTimelineCodeType::_register();
