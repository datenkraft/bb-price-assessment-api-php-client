<?php

namespace Pact;

use Datenkraft\Backbone\Client\BaseApi\ClientFactory;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\AuthException;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\ConfigException;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewCustomerPricingProfile;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Client;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PriceProperty;
use DateTime;
use DateTimeInterface;
use Exception;
use Psr\Http\Message\ResponseInterface;

/**
 * Class PriceAssessmentStructureConsumerPutCustomerPricingProfileTest
 * @package Pact
 */
class PriceAssessmentStructureConsumerPutCustomerPricingProfileTest extends PriceAssessmentConsumerTest
{
    protected string $customerPricingProfileId;
    protected string $customerPricingProfileIdConflict;
    protected string $customerPricingProfileIdInvalid;
    protected string $validSkuCode;
    protected string $customerId;

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

        $this->customerPricingProfileId = 'a5eb9142-794b-4824-9164-6aac24778b3c';
        $this->customerPricingProfileIdConflict = 'a5eb9142-794b-4824-9164-6aac24778b33';
        $this->customerPricingProfileIdInvalid = '02199f9a-5911-4f32-8394-f4fe86773e33';
        $this->validSkuCode = 'test_sku_c';
        //Datenkraft Customer because contract test identity is assigend to dk-customer
        $this->customerId = 'd0d7e31a-9d43-4e8f-aaa2-e71c9aa09be4';

        $this->requestData = [
            'customerId' => $this->customerId,
            'skuCode' => $this->validSkuCode,
            'price' => ['minorMicro' => 123000000, 'currency' => 'EUR'],
            'percent' => 0.11111,
            'validFrom' => $this->validFrom,
        ];
        $this->responseData = [
            'customerPricingProfileId' => $this->customerPricingProfileId,
            'customerId' => $this->customerId,
            'skuCode' => $this->validSkuCode,
            'price' => [
                'minorMicro' => $this->requestData['price']['minorMicro'],
                'currency' => $this->requestData['price']['currency']
            ],
            'percent' => $this->requestData['percent'],
            'validFrom' => $this->requestData['validFrom'],
        ];

        $this->path = '/customer-pricing-profile/' . $this->customerPricingProfileId;
    }

    public function testPutCustomerPricingProfileSuccessOk(): void
    {
        $this->expectedStatusCode = '200';

        $this->builder
            ->given(
                'The request is valid, the token is valid and has a valid scope, ' .
                'the customerPricingProfile exists and is updated'
            )
            ->uponReceiving(
                'Successful PUT request to /customer-pricing-profile/{customerPricingProfileId} with ok response'
            );

        $this->beginTest();
    }

    public function testPutCustomerPricingProfileSuccessCreated(): void
    {
        $this->expectedStatusCode = '201';

        $this->customerPricingProfileId = 'a5eb9142-794b-4824-9164-6aac24778b3d';
        $this->path = '/customer-pricing-profile/' . $this->customerPricingProfileId;

        $skuCode = 'test_sku_d';
        $validFrom = (new DateTime('2021-01-01 00:00:00'))->format(DateTimeInterface::ATOM);

        $this->requestData['skuCode'] = $skuCode;
        $this->requestData['validFrom'] = $validFrom;

        $this->responseData['customerPricingProfileId'] = $this->customerPricingProfileId;
        $this->responseData['skuCode'] = $skuCode;
        $this->responseData['validFrom'] = $validFrom;

        $this->builder
            ->given(
                'The request is valid, the token is valid and has a valid scope, ' .
                'the customerPricingProfile does not exist and is created'
            )
            ->uponReceiving('Successful PUT request to /organization-pricing-profile/{organizationPricingProfileId}');

        $this->beginTest();
    }


    public function testPostCustomerPricingProfileConflict(): void
    {
        $this->customerPricingProfileId = $this->customerPricingProfileIdConflict;
        $this->path = '/customer-pricing-profile/' . $this->customerPricingProfileId;

        $this->expectedStatusCode = '409';
        $this->errorResponse['errors'][0]['code'] = '409';
        $this->builder
            ->given(
                'The request is valid, the token is valid ' .
                'but a customer pricing profile with the same customerId, skuCode and validFrom-date already exists'
            )
            ->uponReceiving('Unsuccessful PUT request to /customer-pricing-profile - conflict');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPutCustomerPricingProfileUnprocessable(): void
    {
        $this->requestData['skuCode'] = 'invalid_sku_code';

        $this->expectedStatusCode = '422';
        $this->errorResponse['errors'][0]['code'] = '422';
        $this->builder
            ->given('The request is valid, the token is valid and has a valid scope but the customer is invalid')
            ->uponReceiving(
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
        $this->token = getenv('CONTRACT_TEST_CLIENT_WITHOUT_PERMISSIONS_TOKEN');
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

        $customerPricingProfile = (new NewCustomerPricingProfile())
            ->setCustomerId($this->requestData['customerId'])
            ->setSkuCode($this->requestData['skuCode'])
            ->setPrice($priceProperty)
            ->setPercent($this->requestData['percent'])
            ->setValidFrom(new DateTime($this->requestData['validFrom']));

        return $client->putCustomerPricingProfile(
            $this->customerPricingProfileId,
            $customerPricingProfile,
            Client::FETCH_RESPONSE
        );
    }
}
