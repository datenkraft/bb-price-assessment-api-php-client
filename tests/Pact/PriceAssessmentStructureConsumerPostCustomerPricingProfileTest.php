<?php

namespace Pact;

use Datenkraft\Backbone\Client\BaseApi\ClientFactory;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\AuthException;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\ConfigException;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewCustomerPricingProfile;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Client;
use Exception;
use Psr\Http\Message\ResponseInterface;

/**
 * Class PriceAssessmentStructureConsumerPostCustomerPricingProfileTest
 * @package Pact
 */
class PriceAssessmentStructureConsumerPostCustomerPricingProfileTest extends PriceAssessmentConsumerTest
{
    protected string $validSkuCode;

    protected string $validCustomerIdTestCustomerA;

    protected string $validCustomerIdTestCustomerB;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'POST';

        $this->token = getenv('VALID_TOKEN_CUSTOMER_PRICING_PROFILE_POST');

        $this->requestHeaders = [
            'Authorization' => 'Bearer ' . $this->token,
            'Content-Type' => 'application/json'
        ];
        $this->responseHeaders = ['Content-Type' => 'application/json'];

        $this->validSkuCode = 'test_sku_a';
        $this->validCustomerIdTestCustomerA = '86cde51c-9fba-4d8b-8ff7-331645b5c31a'; //Test Customer
        $this->validCustomerIdTestCustomerB = '40c02d14-1a36-4408-9b25-6ec0b6303621'; //Test Customer

        $this->requestData = [
            'customerId' => $this->validCustomerIdTestCustomerA,
            'skuCode' => $this->validSkuCode,
            'price' => 50000,
            'currency' => 'EUR',
            'revenueCommissionPercent' => 0.11111,
        ];
        $this->responseData = [
            'customerPricingProfileId' => $this->matcher->uuid(),
            'customerId' => $this->validCustomerIdTestCustomerA,
            'skuCode' => $this->validSkuCode,
            'price' => $this->requestData['price'],
            'currency' => $this->requestData['currency'],
        ];

        $this->path = '/customer-pricing-profile';
    }

    public function testPostCustomerPricingProfileSuccess(): void
    {
        $this->expectedStatusCode = '201';

        $this->builder
            ->given('The request is valid, the token is valid and has a valid scope')
            ->uponReceiving('Successful POST request to /customer-pricing-profile');

        $this->beginTest();
    }

    public function testPostCustomerPricingProfileConflict(): void
    {
        $this->requestData['customerId'] = '86cde51c-9fba-4d8b-8ff7-331645b5c31a';
        $this->requestData['skuCode'] = 'test_sku_b';

        $this->expectedStatusCode = '409';
        $this->errorResponse['errors'][0]['code'] = '409';
        $this->builder
            ->given('The request is valid, the token is valid and has a valid scope but the customer is invalid')
            ->uponReceiving('Unsuccessful POST request to /customer-pricing-profile - conflict');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPostCustomerPricingProfileUnprocessable(): void
    {
        $this->requestData['customerId'] = '4a5e1650-8ca6-4f2e-8c61-669de5c71516';

        $this->expectedStatusCode = '422';
        $this->errorResponse['errors'][0]['code'] = '422';
        $this->builder
            ->given('The request is valid, the token is valid and has a valid scope but the customer is invalid')
            ->uponReceiving('Unsuccessful POST request to /customer-pricing-profile - invalid customer');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPostCustomerUnauthorized(): void
    {
        $this->token = 'invalid_token';
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        $this->expectedStatusCode = '401';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);
        unset($this->errorResponse['errors'][0]['extra']);

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized POST request to /customer-pricing-profile');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPostCustomerForbidden(): void
    {
        // Token with invalid scope
        $this->token = getenv('VALID_TOKEN_SKU_USAGE_POST');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        // Error code in response is 403
        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request is valid, the token is valid with an invalid scope')
            ->uponReceiving('Forbidden POST request to /customer-pricing-profile');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    /**
     * @throws Exception
     */
    public function testPostCustomerBadRequest(): void
    {
        // customer id is invalid
        $this->requestData['customerId'] = 'asdf';

        // Error code in response is 400
        $this->expectedStatusCode = '400';
        $this->errorResponse = [
            'errors' => [
                [
                    'code' => '400',
                    'message' => $this->matcher->like('Example error message'),
                ],
            ]
        ];

        $this->builder
            ->given('The request body is invalid or missing')
            ->uponReceiving('Bad POST request to /customer-pricing-profile');

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

        $customerPricingProfile = (new NewCustomerPricingProfile())
            ->setCustomerId($this->requestData['customerId'])
            ->setSkuCode($this->requestData['skuCode'])
            ->setPrice($this->requestData['price'])
            ->setCurrency($this->requestData['currency'])
            ->setrevenueCommissionPercent($this->requestData['revenueCommissionPercent']);

        return $client->postCustomerPricingProfile($customerPricingProfile, Client::FETCH_RESPONSE);
    }
}
