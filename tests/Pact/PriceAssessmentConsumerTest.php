<?php

namespace Pact;

use DateTime;
use DateTimeInterface;
use Exception;
use GuzzleHttp\Exception\GuzzleException;
use PhpPact\Consumer\InteractionBuilder;
use PhpPact\Consumer\Matcher\Matcher;
use PhpPact\Standalone\MockService\MockServerEnvConfig;
use PHPUnit\Framework\TestCase;
use PhpPact\Consumer\Model\ConsumerRequest;
use PhpPact\Consumer\Model\ProviderResponse;

/**
 * Class PriceAssessmentConsumerTest
 * @package Pact
 */
abstract class PriceAssessmentConsumerTest extends TestCase
{
    protected InteractionBuilder $builder;
    protected MockServerEnvConfig $config;

    protected string $expectedExceptionClass = GuzzleException::class;

    protected string $token;

    protected string $method;
    protected string $path;
    protected array $queryParams = [];

    protected array $requestHeaders;
    protected array $responseHeaders;
    protected string $expectedStatusCode;

    protected array $requestData;
    protected ?array $responseData;
    protected array $errorResponse;

    protected Matcher $matcher;

    protected string $validFrom;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Matcher for interactions with the mock server
        $this->matcher = new Matcher();

        // Initialize the config of the mock server from environment variables
        $this->config = new MockServerEnvConfig();

        // Try to open a connection to the mock server to verify that it was started with the PactTestListener
        try {
            fsockopen($this->config->getHost(), $this->config->getPort());
        } catch (Exception $exception) {
            throw new Exception(
                'Mock server not running. Make sure the Testsuite was started with the PactTestListener: ' .
                $exception->getMessage()
            );
        }

        // Create the interaction builder
        $this->builder = new InteractionBuilder($this->config);

        // Example error response for testing
        $this->errorResponse = [
            'errors' => [
                [
                    'code' => '0',
                    'message' => $this->matcher->like('Example error message'),
                ]
            ]
        ];

        $this->validFrom = (new DateTime('2021-11-11 00:00:00'))->format(DateTimeInterface::ATOM);
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        // Verify that all registered interactions actually took place
        $this->builder->verify();
    }

    protected function beginTest(): void
    {
        $this->prepareTest();

        $response = $this->doClientRequest();

        $this->assertEquals($this->expectedStatusCode, $response->getStatusCode());
        if ($this->expectedStatusCode != 204) {
            $this->assertJson($response->getBody());
        }
    }

    protected function prepareTest(): void
    {
        $consumerRequest = $this->createConsumerRequest(
            $this->method,
            $this->path,
            $this->requestHeaders,
            $this->requestData
        );
        $providerResponse = $this->createProviderResponse(
            $this->expectedStatusCode,
            $this->responseHeaders,
            $this->responseData
        );

        $this->builder->with($consumerRequest)->willRespondWith($providerResponse);
    }

    /**
     * @param string $method
     * @param string $path
     * @param array $requestHeaders
     * @param array $requestBody
     * @return ConsumerRequest
     */
    protected function createConsumerRequest(
        string $method,
        string $path,
        array $requestHeaders,
        array $requestBody = []
    ): ConsumerRequest {
        $request = new ConsumerRequest();
        $request->setMethod($method)->setPath($path);
        if (is_array($this->queryParams)) {
            foreach ($this->queryParams as $queryParam => $value) {
                if (is_array($value)) {
                    $value = implode(',', $value);
                }
                $request->addQueryParameter($queryParam, urlencode($value));
            }
        }
        foreach ($requestHeaders as $header => $value) {
            $request->addHeader($header, $value);
        }
        if (!empty($requestBody)) {
            $request->setBody($requestBody);
        }
        return $request;
    }

    /**
     * @param int $statusCode
     * @param array $responseHeaders
     * @param array $responseBody
     * @return ProviderResponse
     */
    protected function createProviderResponse(
        int $statusCode,
        array $responseHeaders,
        array $responseBody = null
    ): ProviderResponse {
        $response = new ProviderResponse();
        $response->setStatus($statusCode);
        foreach ($responseHeaders as $header => $value) {
            $response->addHeader($header, $value);
        }
        if ($responseBody !== null) {
            $response->setBody($responseBody);
        }
        return $response;
    }

    abstract protected function doClientRequest();
}
