<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception;

class PostAuthRoleIdentityCollectionEndpointUnprocessableEntityException extends UnprocessableEntityException
{
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Unprocessable Entity', 422);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}