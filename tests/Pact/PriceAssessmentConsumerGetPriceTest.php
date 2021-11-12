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

        $this->token = getenv('CONTRACT_TEST_CLIENT_TOKEN');

        $this->requestHeaders = [
            'Authorization' => 'Bearer ' . $this->token,
        ];

        $this->responseHeaders = [
            'Content-Type' => 'application/json',
        ];

        $this->skuCode = 'test_sku_b';
        $this->customerId = 'd0d7e31a-9d43-4e8f-aaa2-e71c9aa09be4';
        $this->path = '/price';
        $this->queryParams = [
            'filter[skuCode]' => $this->skuCode,
            'filter[customerId]' => $this->customerId,
            'filter[validFrom]' => $this->validFrom
        ];

        $this->requestData = [];
        $this->responseData = [
            [
                'skuCode' => $this->skuCode,
                'customerId' => $this->customerId,
                'price' => ['minorMicro' => 123000000, 'currency' => 'EUR'],
                'percent' => 0.11111,
                'validFrom' => $this->validFrom,
            ]
        ];
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }

    public function testGetPriceSuccess(): void
    {
        $this->expectedStatusCode = '200';

        $this->builder
            ->given('the request is valid, the token is valid and has a valid scope')
            ->uponReceiving('Successful GET request to /price');

        $this->beginTest();
    }

    public function testGetPriceUnauthorized(): void
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

    public function testGetPriceForbidden(): void
    {
        $this->token = getenv('CONTRACT_TEST_CLIENT_WITHOUT_PERMISSIONS_TOKEN');
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

    public function testGetPriceBadRequest(): void
    {
        // empty skuCode
        $this->queryParams['filter[skuCode]'] = '';

        // Error code in response is 400
        $this->expectedStatusCode = '400';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request query is invalid or missing')
            ->uponReceiving('Bad GET request to /customer-pricing-profile');

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
