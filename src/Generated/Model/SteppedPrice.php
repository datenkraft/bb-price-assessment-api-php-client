<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model;

use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class SteppedPrice implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Valid from Quantity
     *
     * @var int
     */
    public int $validFromQuantity;
    /**
     * @var SteppedPricePriceProperty
     */
    public SteppedPricePriceProperty $price;
    public function definedProperties(): array
    {
        return ['validFromQuantity' => 'validFromQuantity', 'price' => 'price'];
    }
}