<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated;

class Client extends \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Client\Client
{
    /**
     * Add a new Customer Pricing Profile
     *
     * @param \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewCustomerPricingProfile $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostCustomerPricingProfileUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostCustomerPricingProfileForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostCustomerPricingProfileUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostCustomerPricingProfileConflictException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostCustomerPricingProfileBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostCustomerPricingProfileInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\CustomerPricingProfile|\Psr\Http\Message\ResponseInterface
     */
    public function postCustomerPricingProfile(\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewCustomerPricingProfile $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\PostCustomerPricingProfile($requestBody), $fetch);
    }
    /**
     * Delete Customer Pricing Profile
     *
     * @param string $customerPricingProfileId Customer Pricing Profile Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteCustomerPricingProfileUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteCustomerPricingProfileForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteCustomerPricingProfileBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteCustomerPricingProfileInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCustomerPricingProfile(string $customerPricingProfileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\DeleteCustomerPricingProfile($customerPricingProfileId), $fetch);
    }
    /**
     * Query Customer Pricing Profile by by its id
     *
     * @param string $customerPricingProfileId Customer Pricing Profile Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetCustomerPricingProfileUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetCustomerPricingProfileForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetCustomerPricingProfileBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetCustomerPricingProfileInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\CustomerPricingProfile|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerPricingProfile(string $customerPricingProfileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetCustomerPricingProfile($customerPricingProfileId), $fetch);
    }
    /**
     * Add a new Customer Pricing Profile
     *
     * @param string $customerPricingProfileId Customer Pricing Profile Id
     * @param \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewCustomerPricingProfile $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PutCustomerPricingProfileUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PutCustomerPricingProfileForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PutCustomerPricingProfileUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PutCustomerPricingProfileConflictException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PutCustomerPricingProfileBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PutCustomerPricingProfileInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\CustomerPricingProfile|\Psr\Http\Message\ResponseInterface
     */
    public function putCustomerPricingProfile(string $customerPricingProfileId, \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewCustomerPricingProfile $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\PutCustomerPricingProfile($customerPricingProfileId, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOpenApiInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenApi(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetOpenApi(), $fetch);
    }
    /**
     * Get the openapi documentation in the specified format (yaml or json, fallback is json)
     *
     * @param string $format Openapi file format
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOpenApiInFormatInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenApiInFormat(string $format, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetOpenApiInFormat($format), $fetch);
    }
    /**
     * Add a new Organization Pricing Profile
     *
     * @param \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewOrganizationPricingProfile $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileConflictException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\OrganizationPricingProfile|\Psr\Http\Message\ResponseInterface
     */
    public function postOrganizationPricingProfile(\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewOrganizationPricingProfile $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\PostOrganizationPricingProfile($requestBody), $fetch);
    }
    /**
     * Delete Organization Pricing Profile
     *
     * @param string $organizationPricingProfileId Organization Pricing Profile Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteOrganizationPricingProfileUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteOrganizationPricingProfileForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteOrganizationPricingProfileBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteOrganizationPricingProfileInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOrganizationPricingProfile(string $organizationPricingProfileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\DeleteOrganizationPricingProfile($organizationPricingProfileId), $fetch);
    }
    /**
     * Query Organization Pricing Profile by by its id
     *
     * @param string $organizationPricingProfileId Organization Pricing Profile Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\OrganizationPricingProfile|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getOrganizationPricingProfile(string $organizationPricingProfileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetOrganizationPricingProfile($organizationPricingProfileId), $fetch);
    }
    /**
     * Add a new Organization Pricing Profile
     *
     * @param string $organizationPricingProfileId Organization Pricing Profile Id
     * @param \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewOrganizationPricingProfile $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PutOrganizationPricingProfileUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PutOrganizationPricingProfileForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PutOrganizationPricingProfileUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PutOrganizationPricingProfileConflictException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PutOrganizationPricingProfileBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PutOrganizationPricingProfileInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\OrganizationPricingProfile|\Psr\Http\Message\ResponseInterface
     */
    public function putOrganizationPricingProfile(string $organizationPricingProfileId, \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewOrganizationPricingProfile $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\PutOrganizationPricingProfile($organizationPricingProfileId, $requestBody), $fetch);
    }
    /**
     * Get Price
     *
     * @param array $queryParameters {
     *     @var array $filter[skuId] SkuId filter
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetPriceCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetPriceCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetPriceCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetPriceCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\Price[]|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getPriceCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetPriceCollection($queryParameters), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('/UNDEFINED');
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}