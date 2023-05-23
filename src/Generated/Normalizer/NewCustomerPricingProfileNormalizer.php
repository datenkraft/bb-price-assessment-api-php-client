<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Normalizer\CheckArray;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class NewCustomerPricingProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\NewCustomerPricingProfile';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\NewCustomerPricingProfile';
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
        $object = new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewCustomerPricingProfile();
        if (\array_key_exists('percent', $data) && \is_int($data['percent'])) {
            $data['percent'] = (double) $data['percent'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('customerId', $data)) {
            $object->setCustomerId($data['customerId']);
            unset($data['customerId']);
        }
        if (\array_key_exists('skuCode', $data)) {
            $object->setSkuCode($data['skuCode']);
            unset($data['skuCode']);
        }
        if (\array_key_exists('price', $data) && $data['price'] !== null) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['price'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setPrice($values);
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
            $values_1 = array();
            foreach ($data['steppedPrices'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\SteppedPrice', 'json', $context);
            }
            $object->setSteppedPrices($values_1);
            unset($data['steppedPrices']);
        }
        elseif (\array_key_exists('steppedPrices', $data) && $data['steppedPrices'] === null) {
            $object->setSteppedPrices(null);
        }
        if (\array_key_exists('validFrom', $data)) {
            $object->setValidFrom(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['validFrom']));
            unset($data['validFrom']);
        }
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_2;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('customerId') && null !== $object->getCustomerId()) {
            $data['customerId'] = $object->getCustomerId();
        }
        if ($object->isInitialized('skuCode') && null !== $object->getSkuCode()) {
            $data['skuCode'] = $object->getSkuCode();
        }
        if ($object->isInitialized('price') && null !== $object->getPrice()) {
            $values = array();
            foreach ($object->getPrice() as $key => $value) {
                $values[$key] = $value;
            }
            $data['price'] = $values;
        }
        if ($object->isInitialized('percent') && null !== $object->getPercent()) {
            $data['percent'] = $object->getPercent();
        }
        if ($object->isInitialized('steppedPrices') && null !== $object->getSteppedPrices()) {
            $values_1 = array();
            foreach ($object->getSteppedPrices() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['steppedPrices'] = $values_1;
        }
        if ($object->isInitialized('validFrom') && null !== $object->getValidFrom()) {
            $data['validFrom'] = $object->getValidFrom()->format('Y-m-d\\TH:i:sP');
        }
        foreach ($object as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_2;
            }
        }
        return $data;
    }
}