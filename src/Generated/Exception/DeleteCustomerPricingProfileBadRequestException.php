<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception;

class DeleteCustomerPricingProfileBadRequestException extends BadRequestException
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
        parent::__construct('Bad Request

Error codes:
- DATA_INVALID: Invalid data was given.');
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