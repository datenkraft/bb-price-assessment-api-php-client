<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Normalizer\CheckArray;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class NewOrganizationPricingProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewOrganizationPricingProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewOrganizationPricingProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewOrganizationPricingProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('percent', $data) && \is_int($data['percent'])) {
            $data['percent'] = (float) $data['percent'];
        }
        if (\array_key_exists('organizationId', $data)) {
            $object->organizationId = $data['organizationId'];
            unset($data['organizationId']);
        }
        if (\array_key_exists('skuCode', $data)) {
            $object->skuCode = $data['skuCode'];
            unset($data['skuCode']);
        }
        if (\array_key_exists('price', $data) && $data['price'] !== null) {
            $object->price = $this->denormalizer->denormalize($data['price'], \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewOrganizationPricingProfilePrice::class, 'json', $context);
            unset($data['price']);
        }
        elseif (\array_key_exists('price', $data)) {
            $object->price = null;
            unset($data['price']);
        }
        if (\array_key_exists('percent', $data) && $data['percent'] !== null) {
            $object->percent = $data['percent'];
            unset($data['percent']);
        }
        elseif (\array_key_exists('percent', $data)) {
            $object->percent = null;
            unset($data['percent']);
        }
        if (\array_key_exists('steppedPrices', $data) && $data['steppedPrices'] !== null) {
            $values = [];
            foreach ($data['steppedPrices'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\SteppedPrice::class, 'json', $context);
            }
            $object->steppedPrices = $values;
            unset($data['steppedPrices']);
        }
        elseif (\array_key_exists('steppedPrices', $data)) {
            $object->steppedPrices = null;
            unset($data['steppedPrices']);
        }
        if (\array_key_exists('validFrom', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['validFrom']);
            if (false === $date) {
                if (is_string($data['validFrom']) and 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['validFrom'])) {
                    try {
                        $date = new \DateTime($data['validFrom']);
                    } catch (\Exception) {
                        throw new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Normalizer\InvalidDateException($data['validFrom'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Normalizer\InvalidDateException($data['validFrom'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->validFrom = $date;
            unset($data['validFrom']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['organizationId'] = $data->organizationId;
        $dataArray['skuCode'] = $data->skuCode;
        if (array_key_exists('price', get_object_vars($data)) && null !== ($data->price ?? null)) {
            $normalized = $this->normalizer->normalize($data->price, 'json', $context);
            $dataArray['price'] = \is_iterable($normalized) ? new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('percent', get_object_vars($data)) && null !== ($data->percent ?? null)) {
            $dataArray['percent'] = $data->percent;
        }
        if (array_key_exists('steppedPrices', get_object_vars($data)) && null !== ($data->steppedPrices ?? null)) {
            $values = [];
            foreach ($data->steppedPrices as $value) {
                $normalized_1 = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = \is_iterable($normalized_1) ? new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['steppedPrices'] = $values;
        }
        $dataArray['validFrom'] = $data->validFrom->format('Y-m-d\TH:i:sP');
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewOrganizationPricingProfile::class => false];
    }
}