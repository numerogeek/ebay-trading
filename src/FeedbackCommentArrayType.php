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
 * Contains one or more stored comments for use as feedback to buyers.
 **/
class FeedbackCommentArrayType extends EbatNs_ComplexType
{
    const TAG = 'FeedbackCommentArrayType';
    const NAME = 'FeedbackCommentArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string[]|null
     */
    protected $StoredCommentText = [];


    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getStoredCommentText($index = null)
    {
        return $this->_dc($index === null
            ? $this->StoredCommentText
            : (count($this->StoredCommentText) > $index
                ? $this->StoredCommentText[$index]
                : null), 'StoredCommentText');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setStoredCommentText($value, $index = null)
    {
        if ($index === null) {
            $this->StoredCommentText = $value;
        } else {
            $this->StoredCommentText[$index] = [];
            
            foreach ($value as $item) {
                $this->addStoredCommentText($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addStoredCommentText($value)
    {
        $this->StoredCommentText[] = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['StoredCommentText' => ['cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

FeedbackCommentArrayType::_register();
