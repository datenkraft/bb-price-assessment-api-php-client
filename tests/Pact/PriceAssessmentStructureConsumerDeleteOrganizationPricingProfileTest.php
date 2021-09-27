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
class PriceAssessmentStructureConsumerDeleteOrganizationPricingProfileTest extends PriceAssessmentConsumerTest
{
    protected string $organizationPricingProfileId;

    protected string $invalidOrganizationPricingProfileId;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'DELETE';

        $this->token = getenv('CONTRACT_TEST_CLIENT_TOKEN');

        $this->requestHeaders = [
            'Authorization' => 'Bearer ' . $this->token
        ];
        $this->responseHeaders = [];

        $this->organizationPricingProfileId = '4b58d804-bcf0-4a31-8621-12141141137e';
        $this->invalidOrganizationPricingProfileId = 'e4d5c24c-81e2-4a4a-9362-4c439b8f6f2d';

        $this->requestData = [];
        $this->responseData = null;

        $this->path = '/organization-pricing-profile/' . $this->organizationPricingProfileId;
    }

    public function testDeleteOrganizationSuccess(): void
    {
        $this->expectedStatusCode = '204';

        $this->builder
            ->given(
                'A Organization Pricing Profile with the given id exists, ' .
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful DELETE request to /organization-pricing-profile/{organizationPricingProfileId}');

        $this->beginTest();
    }

    public function testDeleteOrganizationUnauthorized(): void
    {
        $this->token = 'invalid_token';
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        $this->expectedStatusCode = '401';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);
        unset($this->errorResponse['errors'][0]['extra']);

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized DELETE request to /organization-pricing-profile/{organizationPricingProfileId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testDeleteOrganizationForbidden(): void
    {
        $this->token = getenv('CONTRACT_TEST_CLIENT_WITHOUT_PERMISSIONS_TOKEN');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        // Error code in response is 403
        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request is valid, the token is valid with an invalid scope')
            ->uponReceiving('Forbidden DELETE request to /organization-pricing-profile/{organizationPricingProfileId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testDeleteOrganizationNotFound(): void
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
            ->uponReceiving('Not Found DELETE request to /organization-pricing-profile/{organizationPricingProfileId}');

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

        return $client->deleteOrganizationPricingProfile($this->organizationPricingProfileId, Client::FETCH_RESPONSE);
    }
}
