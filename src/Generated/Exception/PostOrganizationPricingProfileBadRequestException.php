<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception;

class PostOrganizationPricingProfileBadRequestException extends BadRequestException
{
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Bad Request', 400);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}