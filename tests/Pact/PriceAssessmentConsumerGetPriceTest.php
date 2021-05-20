<?php

namespace Pact;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
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
        $this->path = '/price/' . $this->skuId;

        $this->requestData = [];
        $this->responseData = [
            [
                'skuId' => $this->skuId,
                'organizationId' => 'organizationId_test',
                'price' => $this->matcher->like(999.99),
            ]
        ];
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }

    public function testGetPriceSuccessOnePrice()
    {
        $this->expectedStatusCode = '201';

        $this->builder
            ->given(
                'Exactly one Price exists for the requested skuId, ' .
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful GET request to /price/{skuId}');

        $this->beginTest();
    }

    /**
     * @throws Exception
     */
    public function testGetPriceSuccessMultiplePrices()
    {
        $this->skuId = 'skuId_test_multiple';
        $this->path = '/price/' . $this->skuId;
        $this->responseData = [
            [
                'skuId' => $this->skuId,
                'organizationId' => 'organizationId_test',
                'price' => $this->matcher->like(999.99),
            ],
            [
                'skuId' => $this->skuId,
                'organizationId' => 'organizationId_test',
                'price' => $this->matcher->like(999.99),
            ]
        ];

        $this->expectedStatusCode = '201';

        $this->builder
            ->given(
                'Multiple Prices exist for the requested skuId, ' .
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful GET request to /price/{skuId}');

        $this->beginTest();
    }

    public function testGetPriceSuccessNull()
    {
        $this->skuId = 'skuId_test_null';
        $this->path = '/price/' . $this->skuId;
        $this->responseData = [
            [
                'skuId' => $this->skuId,
                'organizationId' => 'organizationId_test',
                'price' => null,
            ]
        ];

        $this->expectedStatusCode = '201';

        $this->builder
            ->given(
                'The Price "null" (SKU not billable) exists for the requested skuId, ' .
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful GET request to /price/{skuId}');

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
            ->uponReceiving('Unauthorized PUT request to /price/{skuId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testGetPriceForbidden()
    {
        $this->token = getenv('VALID_TOKEN_SKU_USAGE_ADD');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);
        unset($this->errorResponse['errors'][0]['extra']);

        $this->builder
            ->given('The token is valid with an invalid scope')
            ->uponReceiving('Forbidden POST request to to /price/{skuId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testGetPriceNotFound(): void
    {
        $this->skuId = 'skuId_test_not_found';
        $this->path = '/price/' . $this->skuId;

        $this->expectedStatusCode = '404';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('No Prices exist for the requested skuId')
            ->uponReceiving('Not Found GET request to to /price/{skuId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    /**
     * @return ResponseInterface
     * @throws GuzzleException
     */
    protected function doClientRequest(): ResponseInterface
    {
        $client = new Client(['base_uri' => $this->config->getBaseUri()]);
        $options = [
            'headers' => $this->requestHeaders,
            'http_errors' => false,
        ];

        return $client->get($this->path, $options);
    }
}
