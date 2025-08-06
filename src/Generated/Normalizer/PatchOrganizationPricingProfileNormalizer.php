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
class PatchOrganizationPricingProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PatchOrganizationPricingProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PatchOrganizationPricingProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PatchOrganizationPricingProfile();
        if (\array_key_exists('percent', $data) && \is_int($data['percent'])) {
            $data['percent'] = (double) $data['percent'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('price', $data) && $data['price'] !== null) {
            $object->setPrice($this->denormalizer->denormalize($data['price'], \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PatchOrganizationPricingProfilePrice::class, 'json', $context));
            unset($data['price']);
        }
        elseif (\array_key_exists('price', $data) && $data['price'] === null) {
            $object->setPrice(null);
        }
        if (\array_key_exists('percent', $data) && $data['percent'] !== null) {
            $object->setPercent($data['percent']);
            unset($data['percent']);
        }
        elseif (\array_key_exists('percent', $data) && $data['percent'] === null) {
            $object->setPercent(null);
        }
        if (\array_key_exists('steppedPrices', $data) && $data['steppedPrices'] !== null) {
            $values = [];
            foreach ($data['steppedPrices'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\SteppedPrice::class, 'json', $context);
            }
            $object->setSteppedPrices($values);
            unset($data['steppedPrices']);
        }
        elseif (\array_key_exists('steppedPrices', $data) && $data['steppedPrices'] === null) {
            $object->setSteppedPrices(null);
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
        if ($data->isInitialized('price') && null !== $data->getPrice()) {
            $dataArray['price'] = $this->normalizer->normalize($data->getPrice(), 'json', $context);
        }
        if ($data->isInitialized('percent') && null !== $data->getPercent()) {
            $dataArray['percent'] = $data->getPercent();
        }
        if ($data->isInitialized('steppedPrices') && null !== $data->getSteppedPrices()) {
            $values = [];
            foreach ($data->getSteppedPrices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['steppedPrices'] = $values;
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PatchOrganizationPricingProfile::class => false];
    }
}