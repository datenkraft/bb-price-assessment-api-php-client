<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint;

class PutOrganizationPricingProfile extends \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Client\Endpoint
{
    protected $organizationPricingProfileId;
    /**
     * Add a new Organization Pricing Profile
     *
     * @param string $organizationPricingProfileId Organization Pricing Profile Id
     * @param \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewOrganizationPricingProfile $requestBody 
     */
    public function __construct(string $organizationPricingProfileId, \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewOrganizationPricingProfile $requestBody)
    {
        $this->organizationPricingProfileId = $organizationPricingProfileId;
        $this->body = $requestBody;
    }
    use \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{organizationPricingProfileId}'), array($this->organizationPricingProfileId), '/organization-pricing-profile/{organizationPricingProfileId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewOrganizationPricingProfile) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PutOrganizationPricingProfileUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PutOrganizationPricingProfileForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PutOrganizationPricingProfileUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PutOrganizationPricingProfileConflictException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PutOrganizationPricingProfileBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PutOrganizationPricingProfileInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\OrganizationPricingProfile
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\OrganizationPricingProfile', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PutOrganizationPricingProfileUnauthorizedException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PutOrganizationPricingProfileForbiddenException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PutOrganizationPricingProfileUnprocessableEntityException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PutOrganizationPricingProfileConflictException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PutOrganizationPricingProfileBadRequestException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PutOrganizationPricingProfileInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        throw new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}