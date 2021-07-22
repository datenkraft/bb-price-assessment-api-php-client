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
        // Convert filter[skuCode] array to string of comma-separated values
        if (isset($queryParameters['filter[skuCode]']) && is_array($queryParameters['filter[skuCode]'])) {
            $queryParameters['filter[skuCode]'] = implode(',', $queryParameters['filter[skuCode]']);
        }
        parent::__construct($queryParameters);
    }

    /**
     * @return OptionsResolver
     */
    protected function getQueryOptionsResolver(): OptionsResolver
    {
        // Set allowed type for filter[skuCode] to string
        return parent::getQueryOptionsResolver()->setAllowedTypes('filter[skuCode]', array('string'));
    }
}
