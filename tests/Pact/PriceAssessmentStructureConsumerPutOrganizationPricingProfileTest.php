<?php

namespace Pact;

use Datenkraft\Backbone\Client\BaseApi\ClientFactory;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\AuthException;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\ConfigException;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewOrganizationPricingProfile;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Client;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PriceProperty;
use DateTime;
use DateTimeInterface;
use Exception;
use Psr\Http\Message\ResponseInterface;

/**
 * Class PriceAssessmentStructureConsumerPutOrganizationPricingProfileTest
 * @package Pact
 */
class PriceAssessmentStructureConsumerPutOrganizationPricingProfileTest extends PriceAssessmentConsumerTest
{
    protected string $organizationPricingProfileId;
    protected string $organizationPricingProfileIdConflict;
    protected string $organizationPricingProfileIdInvalid;
    protected string $validSkuCode;
    protected string $organizationId;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'PUT';

        $this->token = getenv('CONTRACT_TEST_CLIENT_TOKEN');

        $this->requestHeaders = [
            'Authorization' => 'Bearer ' . $this->token,
            'Content-Type' => 'application/json'
        ];
        $this->responseHeaders = ['Content-Type' => 'application/json'];

        $this->organizationPricingProfileId = '4efe3251-22c2-4373-9df2-d7956fae3f20';
        $this->organizationPricingProfileIdConflict = '4efe3251-22c2-4373-9df2-d7956fae3f21';
        $this->organizationPricingProfileIdInvalid = '5a83fb23-5e36-4d8a-9d5a-fa50e0924b50';
        $this->validSkuCode = 'test_sku_c';
        //Datenkraft Organozation because contract test identity is assigend to dk-customer
        $this->organizationId = '1e31d2a8-c0e7-4709-93fc-7a7a7f7654d4';

        $this->requestData = [
            'organizationId' => $this->organizationId,
            'skuCode' => $this->validSkuCode,
            'price' => ['minorMicro' => 321, 'currency' => 'USD'],
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

        $this->path = '/organization-pricing-profile/' . $this->organizationPricingProfileId;
    }

    public function testPutOrganizationPricingProfileSuccessOk(): void
    {
        $this->expectedStatusCode = '200';

        $this->builder
            ->given(
                'The request is valid, the token is valid and has a valid scope, ' .
                'the organizationPricingProfile exists and is updated'
            )
            ->uponReceiving(
                'Successful PUT request to /organization-pricing-profile/{organizationPricingProfileId} with ok response'
            );

        $this->beginTest();
    }

    public function testPutOrganizationPricingProfileSuccessCreated(): void
    {
        $this->expectedStatusCode = '201';

        $this->organizationPricingProfileId = '4efe3251-22c2-4373-9df2-d7956fae3f22';
        $this->path = '/organization-pricing-profile/' . $this->organizationPricingProfileId;

        $skuCode = 'test_sku_d';
        $validFrom = (new DateTime('2021-01-01 00:00:00'))->format(DateTimeInterface::ATOM);

        $this->requestData['skuCode'] = $skuCode;
        $this->requestData['validFrom'] = $validFrom;

        $this->responseData['organizationPricingProfileId'] = $this->organizationPricingProfileId;
        $this->responseData['skuCode'] = $skuCode;
        $this->responseData['validFrom'] = $validFrom;

        $this->builder
            ->given(
                'The request is valid, the token is valid and has a valid scope, ' .
                'the organizationPricingProfile does not exist and is created'
            )
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
        $this->organizationPricingProfileId = $this->organizationPricingProfileIdConflict;
        $this->path = '/organization-pricing-profile/' . $this->organizationPricingProfileId;

        $this->expectedStatusCode = '409';
        $this->errorResponse['errors'][0]['code'] = '409';
        $this->builder
            ->given(
                'The request is valid, the token is valid ' .
                'but a organization pricing profile with the same organizationId, skuCode and validFrom-date already exists'
            )
            ->uponReceiving(
                'Unsuccessful PUT request to /organization-pricing-profile/{organizationPricingProfileId} - conflict'
            );

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
        $this->token = getenv('CONTRACT_TEST_CLIENT_WITHOUT_PERMISSIONS_TOKEN');
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

        return $client->putOrganizationPricingProfile(
            $this->organizationPricingProfileId,
            $organizationPricingProfile,
            Client::FETCH_RESPONSE
        );
    }
}
