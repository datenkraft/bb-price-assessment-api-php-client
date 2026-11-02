<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model;

use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class AuthRoleIdentityResource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Role Code
     *
     * @var string
     */
    public string $roleCode;
    /**
     * Identity ID
     *
     * @var string
     */
    public string $identityId;
    public function definedProperties(): array
    {
        return ['roleCode' => 'roleCode', 'identityId' => 'identityId'];
    }
}