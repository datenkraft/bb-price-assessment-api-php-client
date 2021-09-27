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
class PriceAssessmentStructureConsumerGetCustomerPricingProfileTest extends PriceAssessmentConsumerTest
{
    protected string $customerPricingProfileId;

    protected string $invalidCustomerPricingProfileId;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'GET';

        $this->token = getenv('CONTRACT_TEST_CLIENT_TOKEN');

        $this->requestHeaders = [
            'Authorization' => 'Bearer ' . $this->token
        ];
        $this->responseHeaders = [
            'Content-Type' => 'application/json'
        ];

        $this->customerPricingProfileId = '7372e896-4a43-4d7c-b15a-70ff98e302f8';
        $this->invalidCustomerPricingProfileId = '0f83f15c-3fb1-44bf-9aab-b974918cc22f';

        $this->requestData = [];
        $this->responseData = [
            'customerPricingProfileId' => $this->customerPricingProfileId,
            'customerId' => '569e4b86-af23-4f73-8c12-3a3e56f148e7',
            'skuCode' => 'c29c3eff-0ac2-4928-8b5b-f116b543ae9f',
            'price' => ['minor' => 123, 'currency' => 'EUR'],
            'percent' => 0.11111,
        ];

        $this->path = '/customer-pricing-profile/' . $this->customerPricingProfileId;
    }

    public function testGetCustomerPricingProfileSuccess(): void
    {
        $this->expectedStatusCode = '200';

        $this->builder
            ->given(
                'A Customer Pricing Profile with the given id exists, ' .
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful GET request to /customer-pricing-profile/{customerPricingProfileId}');

        $this->beginTest();
    }

    public function testGetCustomerPricingProfileUnauthorized(): void
    {
        $this->token = 'invalid_token';
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        $this->expectedStatusCode = '401';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);
        unset($this->errorResponse['errors'][0]['extra']);

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized GET request to /customer-pricing-profile/{customerPricingProfileId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testGetCustomerPricingProfileForbidden(): void
    {
        $this->token = getenv('CONTRACT_TEST_CLIENT_WITHOUT_PERMISSIONS_TOKEN');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        // Error code in response is 403
        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request is valid, the token is valid with an invalid scope')
            ->uponReceiving('Forbidden GET request to /customer-pricing-profile/{customerPricingProfileId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testGetCustomerPricingProfileNotFound(): void
    {
        // Path with id for non existent customer pricing profile
        $this->path = '/customer-pricing-profile/' . $this->invalidCustomerPricingProfileId;
        $this->customerPricingProfileId = $this->invalidCustomerPricingProfileId;

        // Error code in response is 404
        $this->expectedStatusCode = '404';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('A Customer Pricing Profile with customerPricingProfileId does not exist')
            ->uponReceiving('Not Found GET request to /customer-pricing-profile/{customerPricingProfileId}');

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

        return $client->getCustomerPricingProfile($this->customerPricingProfileId, Client::FETCH_RESPONSE);
    }
}
