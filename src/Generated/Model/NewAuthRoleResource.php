<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model;

use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class NewAuthRoleResource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Name
     *
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['name' => 'name'];
    }
}