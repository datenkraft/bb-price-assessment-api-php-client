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

    protected $skuId;

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

        $this->skuId = 'skuId_test';
        $this->path = '/price';
        $this->queryParams = ['filter[skuId]' => [$this->skuId]];

        $this->requestData = [];
        $this->responseData = [
            [
                'skuId' => $this->skuId,
                'organizationId' => 'organizationId_test1',
                'price' => 999.99
            ]
        ];
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }

    public function testGetPriceSuccessOnePrice()
    {
        $this->expectedStatusCode = '200';

        $this->builder
            ->given(
                'Exactly one Price exists for the requested skuId, ' .
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful GET request to /price');

        $this->beginTest();
    }

    /**
     * @throws Exception
     */
    public function testGetPriceSuccessMultiplePrices()
    {
        $this->skuId = 'skuId_test_multiple';
        $this->queryParams = ['filter[skuId]' => [$this->skuId]];
        $this->responseData = [
            [
                'skuId' => $this->skuId,
                'organizationId' => 'organizationId_test2',
                'price' => 999.99
            ],
            [
                'skuId' => $this->skuId,
                'organizationId' => 'organizationId_test3',
                'price' => 999.99
            ]
        ];

        $this->expectedStatusCode = '200';

        $this->builder
            ->given(
                'Multiple Prices exist for the requested skuId, ' .
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful GET request to /price');

        $this->beginTest();
    }

    public function testGetPriceSuccessNull()
    {
        $this->skuId = 'skuId_test_null';
        $this->queryParams = ['filter[skuId]' => [$this->skuId]];
        $this->responseData = [
            [
                'skuId' => $this->skuId,
                'organizationId' => 'organizationId_test4',
                'price' => null
            ]
        ];

        $this->expectedStatusCode = '200';

        $this->builder
            ->given(
                'The Price "null" (SKU not billable) exists for the requested skuId, ' .
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
