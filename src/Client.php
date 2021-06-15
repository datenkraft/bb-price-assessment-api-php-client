<?php

declare(strict_types=1);

namespace Datenkraft\Backbone\Client\PriceAssessmentApi;

use Datenkraft\Backbone\Client\BaseApi\ClientFactory;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\AuthException;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Endpoint\GetPriceCollection;

/**
 * Class Client
 * @package Datenkraft\Backbone\Client\PriceAssessmentApi
 */
class Client extends Generated\Client
{
    /**
     * @param ClientFactory $clientFactory
     * @param string|null $endpointUrl
     * @return static
     * @throws AuthException
     */
    public static function createWithFactory(ClientFactory $clientFactory, string $endpointUrl = null): self
    {
        $endpointUrl = $endpointUrl ?? getenv('X_DATENKRAFT_PRICE_ASSESSMENT_API_URL') ?: null;
        return $clientFactory->createClient(static::class, $endpointUrl);
    }

    /**
     * @inheritDoc
     */
    public function getPriceCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetPriceCollection($queryParameters), $fetch);
    }
}
