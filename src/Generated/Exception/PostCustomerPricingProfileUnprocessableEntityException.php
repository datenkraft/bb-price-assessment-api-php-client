<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception;

class PostCustomerPricingProfileUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Unprocessable Entity');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse() : \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}