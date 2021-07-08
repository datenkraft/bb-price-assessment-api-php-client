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
 * Class PriceAssessmentStructureConsumerPutCustomerPricingProfileTest
 * @package Pact
 */
class PriceAssessmentStructureConsumerPutCustomerPricingProfileTest extends PriceAssessmentConsumerTest
{
    protected string $customerPricingProfileId;

    protected string $invalidCustomerPricingProfileId;

    protected string $validSkuId;

    protected string $validCustomerIdA;

    protected string $validCustomerIdB;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'PUT';

        $this->token = getenv('VALID_TOKEN_CUSTOMER_PRICING_PROFILE_PUT');

        $this->requestHeaders = [
            'Authorization' => 'Bearer ' . $this->token,
            'Content-Type' => 'application/json'
        ];
        $this->responseHeaders = ['Content-Type' => 'application/json'];

        $this->customerPricingProfileId = 'a5eb9142-794b-4824-9164-6aac24778b3c';
        $this->invalidCustomerPricingProfileId = '02199f9a-5911-4f32-8394-f4fe86773e33';
        $this->validSkuId = 'test_sku_c';
        $this->validCustomerIdA = '71b9fb54-4f6f-493c-bd62-229d79d07880'; //Test Customer
        $this->validCustomerIdB = '86cde51c-9fba-4d8b-8ff7-331645b5c31a'; //Test Customer

        $this->requestData = [
            'customerId' => $this->validCustomerIdA,
            'skuId' => $this->validSkuId,
            'price' => 123,
            'currency' => 'EUR',
            'revenueCommissionPercent' => 0.11111,
        ];
        $this->responseData = [
            'customerPricingProfileId' => $this->matcher->uuid(),
            'customerId' => $this->validCustomerIdA,
            'skuId' => $this->validSkuId,
            'price' => $this->requestData['price'],
            'currency' => $this->requestData['currency'],
            'revenueCommissionPercent' => $this->requestData['revenueCommissionPercent'],
        ];

        $this->path = '/customer-pricing-profile/' . $this->customerPricingProfileId;
    }

    public function testPutCustomerPricingProfileSuccess(): void
    {
        $this->expectedStatusCode = '200';

        $this->builder
            ->given(
                'The request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful PUT request to /customer-pricing-profile/{customerPricingProfileId}');

        $this->beginTest();
    }

    public function testPostCustomerPricingProfileConflict(): void
    {
        $this->requestData['customerId'] = '86cde51c-9fba-4d8b-8ff7-331645b5c31a';
        $this->requestData['skuId'] = 'test_sku_d';

        $this->expectedStatusCode = '409';
        $this->errorResponse['errors'][0]['code'] = '409';
        $this->builder->given(
            'The request is valid, the token is valid and has a valid scope but the customer is invalid'
        )->uponReceiving('Unsuccessful PUT request to /customer-pricing-profile - conflict');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPostCustomerPricingProfileNotFound(): void
    {
        // Path with id for non existent customer pricing profile
        $this->path = '/customer-pricing-profile/' . $this->invalidCustomerPricingProfileId;
        $this->customerPricingProfileId = $this->invalidCustomerPricingProfileId;
        $this->requestData['skuId'] = 'test_sku_d';

        // Error code in response is 404
        $this->expectedStatusCode = '404';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given(
                'A Customer Pricing Profile with customerPricingProfileId does not exist'
            )
            ->uponReceiving('Not Found PUT request to /customer-pricing-profile/{customerPricingProfileId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPutCustomerPricingProfileUnprocessable(): void
    {
        $this->requestData['customerId'] = 'bf6793ae-1246-4ca1-85d0-d4efe18a5c91';

        $this->expectedStatusCode = '422';
        $this->errorResponse['errors'][0]['code'] = '422';
        $this->builder->given(
            'The request is valid, the token is valid and has a valid scope but the customer is invalid'
        )->uponReceiving(
            'Unsuccessful PUT request to /customer-pricing-profile/{customerPricingProfileId} - invalid customer'
        );

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPutCustomerPricingProfileUnauthorized(): void
    {
        $this->token = 'invalid_token';
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        $this->expectedStatusCode = '401';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);
        unset($this->errorResponse['errors'][0]['extra']);

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized PUT request to /customer-pricing-profile/{customerPricingProfileId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPutCustomerPricingProfileForbidden(): void
    {
        // Token with invalid scope
        $this->token = getenv('VALID_TOKEN_SKU_USAGE_POST');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        // Error code in response is 403
        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request is valid, the token is valid with an invalid scope')
            ->uponReceiving('Forbidden PUT request to /customer-pricing-profile/{customerPricingProfileId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    /**
     * @throws Exception
     */
    public function testPutCustomerPricingProfileBadRequest(): void
    {
        // invalid customerId
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
            ->uponReceiving('Bad PUT request to /customer-pricing-profile/{customerPricingProfileId}');

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
            ->setSkuId($this->requestData['skuId'])
            ->setPrice($this->requestData['price'])
            ->setCurrency($this->requestData['currency'])
            ->setrevenueCommissionPercent($this->requestData['revenueCommissionPercent']);

        return $client->putCustomerPricingProfile(
            $this->customerPricingProfileId,
            $customerPricingProfile,
            Client::FETCH_RESPONSE
        );
    }
}
