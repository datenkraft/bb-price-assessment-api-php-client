<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model;

use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class PatchCustomerPricingProfile implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Price
     *
     * @var PatchCustomerPricingProfilePrice|null
     */
    public ?PatchCustomerPricingProfilePrice $price;
    /**
     * Percent (5 digits precision, 5 pre-decimal digits) Used to calculate percentages of the transmittedvalues,
     * e.g. to calculate commissions.
     *
     * @var float|null
     */
    public ?float $percent;
    /**
     * Stepped Prices
     *
     * @var list<SteppedPrice>|null
     */
    public ?array $steppedPrices;
    public function definedProperties(): array
    {
        return ['price' => 'price', 'percent' => 'percent', 'steppedPrices' => 'steppedPrices'];
    }
}