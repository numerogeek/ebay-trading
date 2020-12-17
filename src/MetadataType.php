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
 * Metadata
 * container to provide price guidance information, which includes the minimum and maximum recommended prices for
 * the item, which are based on recent sales of similar items.
 **/
class MetadataType extends EbatNs_ComplexType
{
    const TAG = 'MetadataType';
    const NAME = 'MetadataType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Name = null;

    /**
     * @var string[]|null
     */
    protected $Value = [];


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getName()
    {
        return $this->_dc($this->Name, 'Name');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setName($value)
    {
        $this->Name = self::_string($value);
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getValue($index = null)
    {
        return $this->_dc($index === null
            ? $this->Value
            : (count($this->Value) > $index
                ? $this->Value[$index]
                : null), 'Value');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setValue($value, $index = null)
    {
        if ($index === null) {
            $this->Value = $value;
        } else {
            $this->Value[$index] = [];
            
            foreach ($value as $item) {
                $this->addValue($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addValue($value)
    {
        $this->Value[] = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Name' => [],
            'Value' => ['cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MetadataType::_register();
