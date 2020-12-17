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
 * Type defining the
 * ListingRecommendations
 * container that is
 * conditionally returned in all Add/Revise/Relist/Verify API calls. A
 * 
 * ListingRecommendations
 * container consists of one or
 * more
 * Recommendation
 * containers, and each
 * 
 * Recommendation
 * container provides a message to the seller on how a
 * listing can be improved or brought up to standard in regards to top-rated seller/listing requirements,
 * mandated or recommended Item Specifics, picture quality requirements, pricing and/or listing format
 * recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to use Fast 'N
 * Free shipping.
 * 
 * The
 * ListingRecommendations
 * container is only returned if the
 * 
 * IncludeRecommendations
 * flag is included and set to 'true' in the
 * API call request.
 **/
class ListingRecommendationsType extends EbatNs_ComplexType
{
    const TAG = 'ListingRecommendationsType';
    const NAME = 'ListingRecommendationsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ListingRecommendationType[]|null
     */
    protected $Recommendation = [];


    /**
     * @return ListingRecommendationType[]|ListingRecommendationType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getRecommendation($index = null)
    {
        return $this->_dc($index === null
            ? $this->Recommendation
            : (count($this->Recommendation) > $index
                ? $this->Recommendation[$index]
                : null), 'Recommendation');
    }

    /**
     * @param ListingRecommendationType|null|ListingRecommendationType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setRecommendation($value, $index = null)
    {
        if ($index === null) {
            $this->Recommendation = $value;
        } else {
            $this->Recommendation[$index] = [];
            
            foreach ($value as $item) {
                $this->addRecommendation($item);
            }
        }
    }

    /**
     * @param ListingRecommendationType|null $value
     * @return void
     */
    public function addRecommendation($value)
    {
        $this->Recommendation[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Recommendation' => ['type' => 'ListingRecommendationType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

ListingRecommendationsType::_register();
