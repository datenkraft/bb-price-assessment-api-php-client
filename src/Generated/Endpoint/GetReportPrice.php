<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint;

class GetReportPrice extends \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Client\Endpoint
{
    protected $accept;
    /**
    * Get Price Table for an Organization.
    The prices are sorted by: skuGroup:name, sku:name, validFrom, steppedPrices:validFromQuantity.
    *
    * @param array $queryParameters {
    *     @var string $filter[organizationId] Organization Id filter
    *     @var string $filter[validFrom] Valid From Date filter in UTC
    * }
    * @param array $accept Accept content header text/csv|application/json
    */
    public function __construct(array $queryParameters = [], array $accept = [])
    {
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }
    use \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/report/price';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['text/csv', 'application/json']];
        }
        return $this->accept;
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['filter[organizationId]', 'filter[validFrom]']);
        $optionsResolver->setRequired(['filter[organizationId]']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('filter[organizationId]', ['string']);
        $optionsResolver->addAllowedTypes('filter[validFrom]', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetReportPriceBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetReportPriceUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetReportPriceForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetReportPriceNotAcceptableException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetReportPriceInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetReportPriceBadRequestException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetReportPriceUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetReportPriceForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (406 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetReportPriceNotAcceptableException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetReportPriceInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse', 'json');
        }
        throw new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes(): array
    {
        return ['oAuthAuthorization', 'bearerAuth'];
    }
}