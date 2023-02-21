<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class OrganizationPricingProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\OrganizationPricingProfile';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\OrganizationPricingProfile';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\OrganizationPricingProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('organizationPricingProfileId', $data)) {
            $object->setOrganizationPricingProfileId($data['organizationPricingProfileId']);
        }
        if (\array_key_exists('organizationId', $data)) {
            $object->setOrganizationId($data['organizationId']);
        }
        if (\array_key_exists('skuCode', $data)) {
            $object->setSkuCode($data['skuCode']);
        }
        if (\array_key_exists('price', $data) && $data['price'] !== null) {
            $object->setPrice($this->denormalizer->denormalize($data['price'], 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\PricePrice', 'json', $context));
        }
        elseif (\array_key_exists('price', $data) && $data['price'] === null) {
            $object->setPrice(null);
        }
        if (\array_key_exists('percent', $data) && $data['percent'] !== null) {
            $object->setPercent($data['percent']);
        }
        elseif (\array_key_exists('percent', $data) && $data['percent'] === null) {
            $object->setPercent(null);
        }
        if (\array_key_exists('steppedPrices', $data) && $data['steppedPrices'] !== null) {
            $values = array();
            foreach ($data['steppedPrices'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\SteppedPrice', 'json', $context);
            }
            $object->setSteppedPrices($values);
        }
        elseif (\array_key_exists('steppedPrices', $data) && $data['steppedPrices'] === null) {
            $object->setSteppedPrices(null);
        }
        if (\array_key_exists('validFrom', $data)) {
            $object->setValidFrom(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['validFrom']));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getOrganizationPricingProfileId()) {
            $data['organizationPricingProfileId'] = $object->getOrganizationPricingProfileId();
        }
        if (null !== $object->getOrganizationId()) {
            $data['organizationId'] = $object->getOrganizationId();
        }
        $data['skuCode'] = $object->getSkuCode();
        if (null !== $object->getPrice()) {
            $data['price'] = $this->normalizer->normalize($object->getPrice(), 'json', $context);
        }
        if (null !== $object->getPercent()) {
            $data['percent'] = $object->getPercent();
        }
        if (null !== $object->getSteppedPrices()) {
            $values = array();
            foreach ($object->getSteppedPrices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['steppedPrices'] = $values;
        }
        if (null !== $object->getValidFrom()) {
            $data['validFrom'] = $object->getValidFrom()->format('Y-m-d\\TH:i:sP');
        }
        return $data;
    }
}