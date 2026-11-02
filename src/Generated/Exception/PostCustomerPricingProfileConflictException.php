<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception;

class PostCustomerPricingProfileConflictException extends ConflictException
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
        parent::__construct('Conflict

Error codes:
- DATA_ALREADY_EXISTS: A data conflict was detected.');
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