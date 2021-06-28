<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception;

class UnprocessableEntityException extends \RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 422);
    }
}