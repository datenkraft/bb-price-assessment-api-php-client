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
 * Class PriceAssessmentStructureConsumerPutOrganizationPricingProfileTest
 * @package Pact
 */
class PriceAssessmentStructureConsumerPutOrganizationPricingProfileTest extends PriceAssessmentConsumerTest
{
    protected string $organizationPricingProfileId;

    protected string $invalidOrganizationPricingProfileId;

    protected string $validSkuCode;

    protected string $validOrganizationIdA;

    protected string $validOrganizationIdB;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'PUT';

        $this->token = getenv('VALID_TOKEN_ORGANIZATION_PRICING_PROFILE_PUT');

        $this->requestHeaders = [
            'Authorization' => 'Bearer ' . $this->token,
            'Content-Type' => 'application/json'
        ];
        $this->responseHeaders = ['Content-Type' => 'application/json'];

        $this->organizationPricingProfileId = '4efe3251-22c2-4373-9df2-d7956fae3f20';
        $this->invalidOrganizationPricingProfileId = '5a83fb23-5e36-4d8a-9d5a-fa50e0924b50';
        $this->validSkuCode = 'test_sku_c';
        $this->validOrganizationIdA = 'adece628-c1ce-436b-8975-01d32753bc33';
        $this->validOrganizationIdB = 'cdccec4d-1d91-4373-a276-5b5fb6aab69c';

        $this->requestData = [
            'organizationId' => $this->validOrganizationIdA,
            'skuCode' => $this->validSkuCode,
            'price' => ['minor' => 321, 'currency' => 'USD'],
            'percent' => 0.11111,
        ];
        $this->responseData = [
            'organizationPricingProfileId' => $this->matcher->uuid(),
            'organizationId' => $this->validOrganizationIdA,
            'skuCode' => $this->validSkuCode,
            'price' => [
                'minor' => $this->requestData['price']['minor'],
                'currency' => $this->requestData['price']['currency']
            ],
            'percent' => $this->requestData['percent'],
        ];

        $this->path = '/organization-pricing-profile/' . $this->organizationPricingProfileId;
    }

    public function testPutOrganizationPricingProfileSuccess(): void
    {
        $this->expectedStatusCode = '200';

        $this->builder
            ->given('The request is valid, the token is valid and has a valid scope')
            ->uponReceiving('Successful PUT request to /organization-pricing-profile/{organizationPricingProfileId}');

        $this->beginTest();
    }

    public function testPutOrganizationPricingProfileUnprocessable(): void
    {
        $this->requestData['organizationId'] = '88dede6d-b42a-4f59-bcd8-9dda847ebabc';

        $this->expectedStatusCode = '422';
        $this->errorResponse['errors'][0]['code'] = '422';
        $this->builder
            ->given('The request is valid, the token is valid and has a valid scope but the project is invalid')
            ->uponReceiving(
                'Unsuccessful PUT request to /organization-pricing-profile/{organizationPricingProfileId} -' .
                ' invalid organization'
            );

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPutOrganizationPricingProfileConflict(): void
    {
        $this->requestData['organizationId'] = 'adece628-c1ce-436b-8975-01d32753bc33';
        $this->requestData['skuCode'] = 'test_sku_b';

        $this->expectedStatusCode = '409';
        $this->errorResponse['errors'][0]['code'] = '409';
        $this->builder
            ->given('The request is valid, the token is valid and has a valid scope but the organization is invalid')
            ->uponReceiving(
                'Unsuccessful PUT request to /organization-pricing-profile/{organizationPricingProfileId} - conflict'
            );

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPutOrganizationPricingProfileNotFound(): void
    {
        // Path with id for non existent organization pricing profile
        $this->path = '/organization-pricing-profile/' . $this->invalidOrganizationPricingProfileId;
        $this->organizationPricingProfileId = $this->invalidOrganizationPricingProfileId;
        $this->requestData['skuCode'] = 'test_sku_a';

        // Error code in response is 404
        $this->expectedStatusCode = '404';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('A Organization Pricing Profile with organizationPricingProfileId does not exist')
            ->uponReceiving('Not Found PUT request to /organization-pricing-profile/{organizationPricingProfileId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPutOrganizationPricingProfileUnauthorized(): void
    {
        $this->token = 'invalid_token';
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        $this->expectedStatusCode = '401';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);
        unset($this->errorResponse['errors'][0]['extra']);

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized PUT request to /organization-pricing-profile/{organizationPricingProfileId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPutOrganizationPricingProfileForbidden(): void
    {
        // Token with invalid scope
        $this->token = getenv('VALID_TOKEN_SKU_USAGE_POST');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        // Error code in response is 403
        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request is valid, the token is valid with an invalid scope')
            ->uponReceiving('Forbidden PUT request to /organization-pricing-profile/{organizationPricingProfileId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    /**
     * @throws Exception
     */
    public function testPutOrganizationPricingProfileBadRequest(): void
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
            ->uponReceiving('Bad PUT request to /organization-pricing-profile/{organizationPricingProfileId}');

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

        return $client->putOrganizationPricingProfile(
            $this->organizationPricingProfileId,
            $organizationPricingProfile,
            Client::FETCH_RESPONSE
        );
    }
}
