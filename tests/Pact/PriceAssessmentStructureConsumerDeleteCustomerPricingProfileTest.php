<?php

namespace Pact;

use Datenkraft\Backbone\Client\BaseApi\ClientFactory;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\AuthException;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\ConfigException;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Client;
use Exception;
use Psr\Http\Message\ResponseInterface;

/**
 * Class PriceAssessmentStructureConsumerGetCustomerPricingProfileTest
 * @package Pact
 */
class PriceAssessmentStructureConsumerDeleteCustomerPricingProfileTest extends PriceAssessmentConsumerTest
{
    protected string $customerPricingProfileId;

    protected string $invalidCustomerPricingProfileId;

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

        $this->customerPricingProfileId = '442a75a2-67ab-4b4c-abb7-7264f4ae77d4';
        $this->invalidCustomerPricingProfileId = '0f83f15c-3fb1-44bf-9aab-b974918cc22f';

        $this->requestData = [];
        $this->responseData = null;

        $this->path = '/customer-pricing-profile/' . $this->customerPricingProfileId;
    }

    public function testDeleteCustomerPricingProfileSuccess(): void
    {
        $this->expectedStatusCode = '204';

        $this->builder
            ->given(
                'A Customer Pricing Profile with the given id exists, ' .
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful DELETE request to /customer-pricing-profile/{customerPricingProfileId}');

        $this->beginTest();
    }

    public function testDeleteCustomerPricingProfileUnauthorized(): void
    {
        $this->token = 'invalid_token';
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        $this->expectedStatusCode = '401';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);
        unset($this->errorResponse['errors'][0]['extra']);

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized DELETE request to /customer-pricing-profile/{customerPricingProfileId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testDeleteCustomerPricingProfileForbidden(): void
    {
        $this->token = getenv('CONTRACT_TEST_CLIENT_WITHOUT_PERMISSIONS_TOKEN');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        // Error code in response is 403
        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request is valid, the token is valid with an invalid scope')
            ->uponReceiving('Forbidden DELETE request to /customer-pricing-profile/{customerPricingProfileId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testDeleteCustomerPricingProfileNotFound(): void
    {
        // Path with id for non existent customer pricing profile
        $this->path = '/customer-pricing-profile/' . $this->invalidCustomerPricingProfileId;
        $this->customerPricingProfileId = $this->invalidCustomerPricingProfileId;

        // Error code in response is 404
        $this->expectedStatusCode = '404';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given(
                'A Customer Pricing Profile with customerPricingProfileId does not exist'
            )
            ->uponReceiving('Not Found DELETE request to /customer-pricing-profile/{customerPricingProfileId}');

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

        return $client->deleteCustomerPricingProfile($this->customerPricingProfileId, Client::FETCH_RESPONSE);
    }
}
