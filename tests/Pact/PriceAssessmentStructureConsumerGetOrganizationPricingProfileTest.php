<?php

namespace Pact;

use Datenkraft\Backbone\Client\BaseApi\ClientFactory;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\AuthException;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\ConfigException;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Client;
use Exception;
use Psr\Http\Message\ResponseInterface;

/**
 * Class PriceAssessmentStructureConsumerGetOrganizationPricingProfileTest
 * @package Pact
 */
class PriceAssessmentStructureConsumerGetOrganizationPricingProfileTest extends PriceAssessmentConsumerTest
{
    protected string $organizationPricingProfileId;

    protected string $invalidOrganizationPricingProfileId;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'GET';

        $this->token = getenv('VALID_TOKEN_ORGANIZATION_PRICING_PROFILE_GET');

        $this->requestHeaders = [
            'Authorization' => 'Bearer ' . $this->token
        ];
        $this->responseHeaders = [
            'Content-Type' => 'application/json'
        ];

        $this->organizationPricingProfileId = '310cc414-2712-4776-a612-b95b4c41cfd1';
        $this->invalidOrganizationPricingProfileId = 'd0d38683-ff65-4b62-a138-6a380e6577bc';

        $this->requestData = [];
        $this->responseData = [
            'organizationPricingProfileId' => $this->organizationPricingProfileId,
            'organizationId' => 'dbc9dc41-ff32-4a9b-b6bd-2c3b736c959e',
            'skuId' => 'c29c3eff-0ac2-4928-8b5b-f116b543ae9f',
            'price' => 123,
            'currency' => 'EUR',
            'revenueCommissionPercent' => 0.11111,
        ];

        $this->path = '/organization-pricing-profile/' . $this->organizationPricingProfileId;
    }

    public function testGetOrganizationPricingProfileSuccess(): void
    {
        $this->expectedStatusCode = '200';

        $this->builder
            ->given(
                'A Organization Pricing Profile with the given id exists, ' .
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful GET request to /organization-pricing-profile/{organizationPricingProfileId}');

        $this->beginTest();
    }

    public function testGetOrganizationPricingProfileUnauthorized(): void
    {
        $this->token = 'invalid_token';
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        $this->expectedStatusCode = '401';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);
        unset($this->errorResponse['errors'][0]['extra']);

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized GET request to /organization-pricing-profile/{organizationPricingProfileId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testGetOrganizationPricingProfileForbidden(): void
    {
        // Token with invalid scope
        $this->token = getenv('VALID_TOKEN_SKU_USAGE_POST');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        // Error code in response is 403
        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request is valid, the token is valid with an invalid scope')
            ->uponReceiving('Forbidden GET request to /organization-pricing-profile/{organizationPricingProfileId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testGetOrganizationPricingProfileNotFound(): void
    {
        // Path with id for non existent organization pricing profile
        $this->path = '/organization-pricing-profile/' . $this->invalidOrganizationPricingProfileId;
        $this->organizationPricingProfileId = $this->invalidOrganizationPricingProfileId;

        // Error code in response is 404
        $this->expectedStatusCode = '404';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given(
                'A Organization Pricing Profile with organizationPricingProfileId does not exist'
            )
            ->uponReceiving('Not Found GET request to /organization-pricing-profile/{organizationPricingProfileId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    /**
     * @return ResponseInterface
     * @throws ConfigException
     * @throws AuthException
     */
    protected function doClientRequest(): ResponseInterface
    {
        $factory = new ClientFactory(
            ['clientId' => 'test', 'clientSecret' => 'test', 'oAuthTokenUrl' => 'test', 'oAuthScopes' => ['test']]
        );
        $factory->setToken($this->token);
        $client = Client::createWithFactory($factory, $this->config->getBaseUri());

        return $client->getOrganizationPricingProfile($this->organizationPricingProfileId, Client::FETCH_RESPONSE);
    }
}
