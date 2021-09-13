<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception;

class PostAuthRoleIdentityCollectionEndpointUnauthorizedException extends UnauthorizedException
{
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Unauthorized', 401);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}