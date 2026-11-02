<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint;

class PostOrganizationPricingProfile extends \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Client\Endpoint
{
    /**
     * Add a new Organization Pricing Profile.
     * You may not use this endpoint to add stepped prices to an existing pricing profile.
     * @param \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewOrganizationPricingProfile $requestBody
     */
    public function __construct(\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewOrganizationPricingProfile $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/organization-pricing-profile';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewOrganizationPricingProfile) {
            return [['Content-Type' => ['application/json']], \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileConflictException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\OrganizationPricingProfile|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (201 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\OrganizationPricingProfile', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileBadRequestException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (409 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileConflictException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (422 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileUnprocessableEntityException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (stripos(strtolower((string) $contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse', 'json');
        }
        throw new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException($status, $body, $response);
    }
    public function getAuthenticationScopes(): array
    {
        return ['oAuthAuthorization', 'bearerAuth'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
    public function getTargetClass(): ?string
    {
        return null;
    }
}