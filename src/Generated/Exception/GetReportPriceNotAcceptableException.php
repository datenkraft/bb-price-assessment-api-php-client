<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception;

class GetReportPriceNotAcceptableException extends NotAcceptableException
{
    /**
     * @var \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    private $errorResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse $errorResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Acceptable

Error codes:
- ACCEPTABLE_RESPONSE_NOT_AVAILABLE: No response can be provided for the requested accept header.');
        $this->errorResponse = $errorResponse;
        $this->response = $response;
    }
    public function getErrorResponse() : \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}