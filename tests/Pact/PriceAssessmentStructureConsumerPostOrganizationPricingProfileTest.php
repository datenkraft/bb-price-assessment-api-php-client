<?php

namespace Pact;

use Datenkraft\Backbone\Client\BaseApi\ClientFactory;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\AuthException;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\ConfigException;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewOrganizationPricingProfile;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Client;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PriceProperty;
use DateTime;
use Exception;
use Psr\Http\Message\ResponseInterface;

/**
 * Class PriceAssessmentStructureConsumerPostOrganizationPricingProfileTest
 * @package Pact
 */
class PriceAssessmentStructureConsumerPostOrganizationPricingProfileTest extends PriceAssessmentConsumerTest
{
    protected string $validSkuCode;
    protected string $organizationId;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'POST';

        $this->token = getenv('CONTRACT_TEST_CLIENT_TOKEN');

        $this->requestHeaders = [
            'Authorization' => 'Bearer ' . $this->token,
            'Content-Type' => 'application/json'
        ];
        $this->responseHeaders = ['Content-Type' => 'application/json'];

        $this->validSkuCode = 'test_sku_a';
        //Datenkraft Organozation because contract test identity is assigend to dk-customer
        $this->organizationId = '1e31d2a8-c0e7-4709-93fc-7a7a7f7654d4';

        $this->requestData = [
            'organizationId' => $this->organizationId,
            'skuCode' => $this->validSkuCode,
            'price' => ['minorMicro' => 123, 'currency' => 'EUR'],
            'percent' => 0.11111,
            'validFrom' => $this->validFrom,
        ];
        $this->responseData = [
            'organizationPricingProfileId' => $this->matcher->uuid(),
            'organizationId' => $this->organizationId,
            'skuCode' => $this->validSkuCode,
            'price' => [
                'minorMicro' => $this->requestData['price']['minorMicro'],
                'currency' => $this->requestData['price']['currency']
            ],
            'percent' => $this->requestData['percent'],
            'validFrom' => $this->requestData['validFrom'],
        ];

        $this->path = '/organization-pricing-profile';
    }

    public function testPostOrganizationPricingProfileSuccess(): void
    {
        $this->expectedStatusCode = '201';

        $this->builder
            ->given('The request is valid, the token is valid and has a valid scope')
            ->uponReceiving('Successful POST request to /organization-pricing-profile');

        $this->beginTest();
    }

    public function testPostOrganizationPricingProfileConflict(): void
    {
        $this->requestData['skuCode'] = 'test_sku_b';

        $this->expectedStatusCode = '409';
        $this->errorResponse['errors'][0]['code'] = '409';
        $this->builder
            ->given(
                'The request is valid, the token is valid ' .
                'but a organization pricing profile with the same ' .
                'organizationId, skuCode and validFrom-date already exists'
            )
            ->uponReceiving('Unsuccessful POST request to /organization-pricing-profile - conflict');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPostOrganizationPricingProfileUnprocessable(): void
    {
        $this->requestData['skuCode'] = 'invalid_sku_code';

        $this->expectedStatusCode = '422';
        $this->errorResponse['errors'][0]['code'] = '422';
        $this->builder
            ->given('The request is valid, the token is valid but the sku with skuCode does not exist')
            ->uponReceiving('Unsuccessful POST request to /organization-pricing-profile - invalid skuCode');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPostOrganizationUnauthorized(): void
    {
        $this->token = 'invalid_token';
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        $this->expectedStatusCode = '401';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);
        unset($this->errorResponse['errors'][0]['extra']);

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized POST request to /organization-pricing-profile');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPostOrganizationForbidden(): void
    {
        $this->token = getenv('CONTRACT_TEST_CLIENT_WITHOUT_PERMISSIONS_TOKEN');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        // Error code in response is 403
        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request is valid, the token is valid with an invalid scope')
            ->uponReceiving('Forbidden POST request to /organization-pricing-profile');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    /**
     * @throws Exception
     */
    public function testPostOrganizationBadRequest(): void
    {
        // invalid organizationId
        $this->requestData['organizationId'] = 'asdf';

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
            ->uponReceiving('Bad POST request to /organization-pricing-profile');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }


    /**
     * @return ResponseInterface
     * @throws ConfigException
     * @throws AuthException
     * @throws Exception
     */
    protected function doClientRequest(): ResponseInterface
    {
        $factory = new ClientFactory(
            ['clientId' => 'test', 'clientSecret' => 'test', 'oAuthTokenUrl' => 'test', 'oAuthScopes' => ['test']]
        );
        $factory->setToken($this->token);
        $client = Client::createWithFactory($factory, $this->config->getBaseUri());

        $priceProperty = (new PriceProperty())
            ->setMinorMicro($this->requestData['price']['minorMicro'])
            ->setCurrency($this->requestData['price']['currency']);

        $organizationPricingProfile = (new NewOrganizationPricingProfile())
            ->setOrganizationId($this->requestData['organizationId'])
            ->setSkuCode($this->requestData['skuCode'])
            ->setPrice($priceProperty)
            ->setPercent($this->requestData['percent'])
            ->setValidFrom(new DateTime($this->requestData['validFrom']));

        return $client->postOrganizationPricingProfile($organizationPricingProfile, Client::FETCH_RESPONSE);
    }
}
