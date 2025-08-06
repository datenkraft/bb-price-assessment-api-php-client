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
class PatchOrganizationPricingProfilePriceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PatchOrganizationPricingProfilePrice::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PatchOrganizationPricingProfilePrice::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PatchOrganizationPricingProfilePrice();
        if (\array_key_exists('minorMicro', $data) && \is_int($data['minorMicro'])) {
            $data['minorMicro'] = (double) $data['minorMicro'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('minorMicro', $data) && $data['minorMicro'] !== null) {
            $object->setMinorMicro($data['minorMicro']);
            unset($data['minorMicro']);
        }
        elseif (\array_key_exists('minorMicro', $data) && $data['minorMicro'] === null) {
            $object->setMinorMicro(null);
        }
        if (\array_key_exists('currency', $data)) {
            $object->setCurrency($data['currency']);
            unset($data['currency']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('minorMicro') && null !== $data->getMinorMicro()) {
            $dataArray['minorMicro'] = $data->getMinorMicro();
        }
        $dataArray['currency'] = $data->getCurrency();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PatchOrganizationPricingProfilePrice::class => false];
    }
}