<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model;

use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class NewOrganizationPricingProfile implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Organization Id
     *
     * @var string
     */
    public string $organizationId;
    /**
     * SKU Code
     *
     * @var string
     */
    public string $skuCode;
    /**
     * Price
     *
     * @var NewOrganizationPricingProfilePrice|null
     */
    public ?NewOrganizationPricingProfilePrice $price;
    /**
     * Percent (5 digits precision, 5 pre-decimal digits) Used to calculate percentages of the transmitted values,
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
    /**
     * Start date from when on the price is valid. This price remains valid until a price with
     * a more recent validFrom date is found.
     *
     * @var \DateTime
     */
    public \DateTime $validFrom;
    public function definedProperties(): array
    {
        return ['organizationId' => 'organizationId', 'skuCode' => 'skuCode', 'price' => 'price', 'percent' => 'percent', 'steppedPrices' => 'steppedPrices', 'validFrom' => 'validFrom'];
    }
}