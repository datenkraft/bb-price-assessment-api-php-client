<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception;

class GetReportPriceNotAcceptableException extends NotAcceptableException
{
    public function __construct(
        /**
         * @var \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
         */
        private readonly \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse $errorResponse,
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('Not Acceptable

Error codes:
- ACCEPTABLE_RESPONSE_NOT_AVAILABLE: No response can be provided for the requested accept header.');
    }
    public function getErrorResponse(): \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}