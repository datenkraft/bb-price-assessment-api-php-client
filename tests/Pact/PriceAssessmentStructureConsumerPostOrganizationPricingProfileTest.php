<?php

namespace Pact;

use Datenkraft\Backbone\Client\BaseApi\ClientFactory;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\AuthException;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\ConfigException;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewOrganizationPricingProfile;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Client;
use Exception;
use Psr\Http\Message\ResponseInterface;

/**
 * Class PriceAssessmentStructureConsumerPostOrganizationPricingProfileTest
 * @package Pact
 */
class PriceAssessmentStructureConsumerPostOrganizationPricingProfileTest extends PriceAssessmentConsumerTest
{
    protected string $validSkuId;

    protected string $validOrganizationIdDatenkraft;

    protected string $validOrganizationIdNiceshops;


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

        $this->validSkuId = 'callone-call_inbound';
        $this->validOrganizationIdDatenkraft = '1e31d2a8-c0e7-4709-93fc-7a7a7f7654d4';
        $this->validOrganizationIdNiceshops = 'c3486847-6d5e-4c41-aeb9-740c8089d428';

        $this->requestData = [
            'organizationId' =>  $this->validOrganizationIdDatenkraft,
            'skuId' =>  $this->validSkuId,
            'price' =>  123,
            'currency' =>  'EUR',
        ];
        $this->responseData = [
            'organizationPricingProfileId' => $this->matcher->uuid(),
            'organizationId' =>  $this->validOrganizationIdDatenkraft,
            'skuId' =>  $this->validSkuId,
            'price' =>  $this->requestData['price'],
            'currency' =>  $this->requestData['currency'],
        ];

        $this->path = '/organization-pricing-profile';
    }

    public function testPostOrganizationPricingProfileSuccess(): void
    {
        $this->expectedStatusCode = '201';

        $this->builder
            ->given(
                'The request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful POST request to /organization-pricing-profile');

        $this->beginTest();
    }

    public function testPostOrganizationPricingProfileUnprocessable(): void
    {
        $this->requestData['organizationId'] = 'thisOrganizationIdIsInvalid';

        $this->expectedStatusCode = '422';
        $this->errorResponse['errors'][0]['code'] = '422';
        $this->builder->given(
            'The request is valid, the token is valid and has a valid scope but the project is invalid'
        )->uponReceiving('Unsuccessful POST request to /organization-pricing-profile - invalid organization');

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

    public function testPostOrganizationBadRequest(): void
    {
        // name is not defined
        $this->requestData['organizationId'] = '';

        // Error code in response is 400
        $this->expectedStatusCode = '400';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

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

        $organizationPricingProfile = (new NewOrganizationPricingProfile())
            ->setOrganizationId($this->requestData['organizationId'])
            ->setSkuId($this->requestData['skuId'])
            ->setPrice($this->requestData['price'])
            ->setCurrency($this->requestData['currency']);

        return $client->postOrganizationPricingProfile($organizationPricingProfile, Client::FETCH_RESPONSE);
    }
}
