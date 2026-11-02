<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model;

use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class BasePricePrice implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Minor Micro
     *
     * @var float|null
     */
    public ?float $minorMicro;
    /**
     * Currency
     *
     * @var string
     */
    public string $currency;
    public function definedProperties(): array
    {
        return ['minorMicro' => 'minorMicro', 'currency' => 'currency'];
    }
}