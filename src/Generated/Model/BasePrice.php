<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model;

use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class BasePrice implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * SKU Code
     *
     * @var string
     */
    public string $skuCode;
    /**
     * Price
     *
     * @var BasePricePrice|null
     */
    public ?BasePricePrice $price;
    /**
     * Percent (5 digits precision, 5 pre-decimal digits) Used to calculate percentages of
     * the transmitted values, e.g. to calculate commissions.
     *
     * @var float|null
     */
    public ?float $percent;
    /**
     * Stepped Prices
     *
     * @var list<SteppedPrice>
     */
    public array $steppedPrices;
    /**
     * Start date from when on the price is valid.
     * This price remains valid until a price with a more recent validFrom date is found.
     *
     * @var \DateTime
     */
    public \DateTime $validFrom;
    public function definedProperties(): array
    {
        return ['skuCode' => 'skuCode', 'price' => 'price', 'percent' => 'percent', 'steppedPrices' => 'steppedPrices', 'validFrom' => 'validFrom'];
    }
}