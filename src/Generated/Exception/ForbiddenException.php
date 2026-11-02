<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception;

abstract class ForbiddenException extends \RuntimeException implements ClientException, WithResponseInterface
{
    public function __construct(string $message)
    {
        parent::__construct($message, 403);
    }
}