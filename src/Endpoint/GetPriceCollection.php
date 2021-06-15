<?php

declare(strict_types=1);

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Endpoint;

use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetPriceCollection as GetPriceCollectionGenerated;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class GetPriceCollection
 * @package Datenkraft\Backbone\Client\PriceAssessmentApi\Endpoint
 */
class GetPriceCollection extends GetPriceCollectionGenerated
{
    /**
     * @inheritDoc
     */
    public function __construct(array $queryParameters = array())
    {
        // Convert filter[skuId] array to string of comma-separated values
        if (isset($queryParameters['filter[skuId]']) && is_array($queryParameters['filter[skuId]'])) {
            $queryParameters['filter[skuId]'] = implode(',', $queryParameters['filter[skuId]']);
        }
        parent::__construct($queryParameters);
    }

    /**
     * @return OptionsResolver
     */
    protected function getQueryOptionsResolver(): OptionsResolver
    {
        // Set allowed type for filter[skuId] to string
        return parent::getQueryOptionsResolver()->setAllowedTypes('filter[skuId]', array('string'));
    }
}
