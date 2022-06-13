<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer;

use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    protected $normalizers = array('Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\ErrorResponse' => 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Normalizer\\ErrorResponseNormalizer', 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\Error' => 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Normalizer\\ErrorNormalizer', 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\SteppedPrice' => 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Normalizer\\SteppedPriceNormalizer', 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\OrganizationPricingProfile' => 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Normalizer\\OrganizationPricingProfileNormalizer', 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\NewOrganizationPricingProfile' => 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Normalizer\\NewOrganizationPricingProfileNormalizer', 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\Price' => 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Normalizer\\PriceNormalizer', 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\PricePrice' => 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Normalizer\\PricePriceNormalizer', 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\CustomerPricingProfile' => 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Normalizer\\CustomerPricingProfileNormalizer', 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\NewCustomerPricingProfile' => 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Normalizer\\NewCustomerPricingProfileNormalizer', 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\PriceProperty' => 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Normalizer\\PricePropertyNormalizer', 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\AuthRoleResource' => 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Normalizer\\AuthRoleResourceNormalizer', 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\AuthPermissionResource' => 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Normalizer\\AuthPermissionResourceNormalizer', 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Model\\AuthRoleIdentityResource' => 'Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Normalizer\\AuthRoleIdentityResourceNormalizer', '\\Jane\\JsonSchemaRuntime\\Reference' => '\\Datenkraft\\Backbone\\Client\\PriceAssessmentApi\\Generated\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null)
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
}