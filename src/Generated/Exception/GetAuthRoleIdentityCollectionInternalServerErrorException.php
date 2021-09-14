<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception;

class GetAuthRoleIdentityCollectionInternalServerErrorException extends InternalServerErrorException
{
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Server error', 500);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}