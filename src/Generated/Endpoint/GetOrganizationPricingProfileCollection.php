<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint;

class GetOrganizationPricingProfileCollection extends \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Client\Endpoint
{
    /**
     * Query Organization Pricing Profile collection by organization ids
     * @param array{
     *    "filter[organizationIds]"?: string, //Comma seperated list of organization ids (optional)
     * } $queryParameters
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/organization-pricing-profile';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['filter[organizationIds]']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('filter[organizationIds]', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\OrganizationPricingProfileCollection|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\OrganizationPricingProfileCollection', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileCollectionBadRequestException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileCollectionUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileCollectionForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileCollectionInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse', 'json'), $response);
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