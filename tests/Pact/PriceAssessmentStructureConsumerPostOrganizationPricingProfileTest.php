<?php

namespace Pact;

use Datenkraft\Backbone\Client\BaseApi\ClientFactory;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\AuthException;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\ConfigException;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewOrganizationPricingProfile;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Client;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PriceProperty;
use Exception;
use Psr\Http\Message\ResponseInterface;

/**
 * Class PriceAssessmentStructureConsumerPostOrganizationPricingProfileTest
 * @package Pact
 */
class PriceAssessmentStructureConsumerPostOrganizationPricingProfileTest extends PriceAssessmentConsumerTest
{
    protected string $validSkuCode;

    protected string $validOrganizationIdOrganizationA;

    protected string $validOrganizationIdOrganizationB;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'POST';

        $this->token = getenv('VALID_TOKEN_ORGANIZATION_PRICING_PROFILE_POST');

        $this->requestHeaders = [
            'Authorization' => 'Bearer ' . $this->token,
            'Content-Type' => 'application/json'
        ];
        $this->responseHeaders = ['Content-Type' => 'application/json'];

        $this->validSkuCode = 'test_sku_b';
        $this->validOrganizationIdOrganizationA = 'adece628-c1ce-436b-8975-01d32753bc33';
        $this->validOrganizationIdOrganizationB = 'cdccec4d-1d91-4373-a276-5b5fb6aab69c';

        $this->requestData = [
            'organizationId' => $this->validOrganizationIdOrganizationA,
            'skuCode' => $this->validSkuCode,
            'price' => ['minor' => 123, 'currency' => 'EUR'],
            'percent' => 0.11111,
        ];
        $this->responseData = [
            'organizationPricingProfileId' => $this->matcher->uuid(),
            'organizationId' => $this->validOrganizationIdOrganizationA,
            'skuCode' => $this->validSkuCode,
            'price' => [
                'minor' => $this->requestData['price']['minor'],
                'currency' => $this->requestData['price']['currency']
            ],
            'percent' => $this->requestData['percent'],
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
        $this->requestData['organizationId'] = $this->validOrganizationIdOrganizationA;
        $this->requestData['skuCode'] = 'test_sku_d';

        $this->expectedStatusCode = '409';
        $this->errorResponse['errors'][0]['code'] = '409';
        $this->builder
            ->given('The request is valid, the token is valid and has a valid scope but the organization is invalid')
            ->uponReceiving('Unsuccessful POST request to /organization-pricing-profile - conflict');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPostOrganizationPricingProfileUnprocessable(): void
    {
        $this->requestData['organizationId'] = '734af8b8-d9a3-48bc-a060-d1dd4a4c8ed1';

        $this->expectedStatusCode = '422';
        $this->errorResponse['errors'][0]['code'] = '422';
        $this->builder
            ->given('The request is valid, the token is valid and has a valid scope but the project is invalid')
            ->uponReceiving('Unsuccessful POST request to /organization-pricing-profile - invalid organization');

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
        // Token with invalid scope
        $this->token = getenv('VALID_TOKEN_SKU_USAGE_POST');
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
     */
    protected function doClientRequest(): ResponseInterface
    {
        $factory = new ClientFactory(
            ['clientId' => 'test', 'clientSecret' => 'test', 'oAuthTokenUrl' => 'test', 'oAuthScopes' => ['test']]
        );
        $factory->setToken($this->token);
        $client = Client::createWithFactory($factory, $this->config->getBaseUri());

        $priceProperty = (new PriceProperty())
            ->setMinor($this->requestData['price']['minor'])
            ->setCurrency($this->requestData['price']['currency']);

        $organizationPricingProfile = (new NewOrganizationPricingProfile())
            ->setOrganizationId($this->requestData['organizationId'])
            ->setSkuCode($this->requestData['skuCode'])
            ->setPrice($priceProperty)
            ->setpercent($this->requestData['percent']);

        return $client->postOrganizationPricingProfile($organizationPricingProfile, Client::FETCH_RESPONSE);
    }
}
