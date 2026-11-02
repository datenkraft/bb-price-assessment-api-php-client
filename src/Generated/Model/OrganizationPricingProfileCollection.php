<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model;

use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class OrganizationPricingProfileCollection implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var CollectionPagination
     */
    public CollectionPagination $pagination;
    /**
     * @var list<OrganizationPricingProfile>
     */
    public array $data;
    public function definedProperties(): array
    {
        return ['pagination' => 'pagination', 'data' => 'data'];
    }
}