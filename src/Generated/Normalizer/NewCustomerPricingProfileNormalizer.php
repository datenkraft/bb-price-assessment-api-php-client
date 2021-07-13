<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Normalizer\CheckArray;
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
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\NewCustomerPricingProfile';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\NewCustomerPricingProfile';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewCustomerPricingProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('customerId', $data)) {
            $object->setCustomerId($data['customerId']);
        }
        if (\array_key_exists('skuId', $data)) {
            $object->setSkuId($data['skuId']);
        }
        if (\array_key_exists('price', $data) && $data['price'] !== null) {
            $object->setPrice($data['price']);
        }
        elseif (\array_key_exists('price', $data) && $data['price'] === null) {
            $object->setPrice(null);
        }
        if (\array_key_exists('currency', $data) && $data['currency'] !== null) {
            $object->setCurrency($data['currency']);
        }
        elseif (\array_key_exists('currency', $data) && $data['currency'] === null) {
            $object->setCurrency(null);
        }
        if (\array_key_exists('revenueCommissionPercent', $data) && $data['revenueCommissionPercent'] !== null) {
            $object->setRevenueCommissionPercent($data['revenueCommissionPercent']);
        }
        elseif (\array_key_exists('revenueCommissionPercent', $data) && $data['revenueCommissionPercent'] === null) {
            $object->setRevenueCommissionPercent(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['customerId'] = $object->getCustomerId();
        $data['skuId'] = $object->getSkuId();
        if (null !== $object->getPrice()) {
            $data['price'] = $object->getPrice();
        }
        if (null !== $object->getCurrency()) {
            $data['currency'] = $object->getCurrency();
        }
        if (null !== $object->getRevenueCommissionPercent()) {
            $data['revenueCommissionPercent'] = $object->getRevenueCommissionPercent();
        }
        return $data;
    }
}