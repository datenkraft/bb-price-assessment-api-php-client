<?php

namespace Pact;

use Datenkraft\Backbone\Client\BaseApi\ClientFactory;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\AuthException;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\ConfigException;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Client;
use Exception;
use Psr\Http\Message\ResponseInterface;

/**
 * Class PriceAssessmentConsumerGetPriceTest
 * @package Pact
 */
class PriceAssessmentConsumerGetPriceTest extends PriceAssessmentConsumerTest
{

    protected string $skuCode;

    protected string $customerId;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'GET';

        $this->token = getenv('VALID_TOKEN_PRICE_GET');

        $this->requestHeaders = [
            'Authorization' => 'Bearer ' . $this->token,
        ];

        $this->responseHeaders = [
            'Content-Type' => 'application/json',
        ];

        $this->skuCode = 'test_sku_a';
        $this->customerId = '71b9fb54-4f6f-493c-bd62-229d79d07880';
        $this->path = '/price';
        $this->queryParams = ['filter[skuCode]' => $this->skuCode, 'filter[customerId]' => $this->customerId];

        $this->requestData = [];
        $this->responseData = [
            [
                'skuCode' => $this->skuCode,
                'customerId' => $this->customerId,
                'price' => ['minor' => 50000, 'currency' => 'USD'],
                'revenueCommissionPercent' => 0.11111,
            ]
        ];
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }

    public function testGetPriceSuccess()
    {
        $this->expectedStatusCode = '200';

        $this->builder
            ->given('the request is valid, the token is valid and has a valid scope')
            ->uponReceiving('Successful GET request to /price');

        $this->beginTest();
    }

    public function testGetPriceSuccessNull()
    {
        $this->customerId = 'ab1f0809-931b-4739-b470-bccf1fb08090';
        $this->queryParams = ['filter[skuCode]' => $this->skuCode, 'filter[customerId]' => $this->customerId];
        $this->responseData = [
            [
                'skuCode' => $this->skuCode,
                'customerId' => $this->customerId,
                'price' => ['minor' => null, 'currency' => null],
                'revenueCommissionPercent' => null,
            ]
        ];

        $this->expectedStatusCode = '200';

        $this->builder
            ->given(
                'PriceMinor and PriceCurrency is null, ' .
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful GET request to /price');

        $this->beginTest();
    }

    public function testGetPriceUnauthorized()
    {
        $this->token = 'invalid_token';
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        $this->expectedStatusCode = '401';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);
        unset($this->errorResponse['errors'][0]['extra']);

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized PUT request to /price');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testGetPriceForbidden()
    {
        $this->token = getenv('VALID_TOKEN_SKU_USAGE_POST');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);
        unset($this->errorResponse['errors'][0]['extra']);

        $this->builder
            ->given('The token is valid with an invalid scope')
            ->uponReceiving('Forbidden POST request to to /price');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    /**
     * @return ResponseInterface
     * @throws AuthException
     * @throws ConfigException
     */
    protected function doClientRequest(): ResponseInterface
    {
        $factory = new ClientFactory(
            ['clientId' => 'test', 'clientSecret' => 'test', 'oAuthTokenUrl' => 'test', 'oAuthScopes' => ['test']]
        );
        $factory->setToken($this->token);
        $client = Client::createWithFactory($factory, $this->config->getBaseUri());

        return $client->getPriceCollection($this->queryParams, Client::FETCH_RESPONSE);
    }
}
