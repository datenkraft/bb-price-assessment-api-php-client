<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer;

use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Normalizer\CheckArray;
use Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Normalizer\ValidatorTrait;
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
    use ValidatorTrait;
    protected $normalizers = [
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuditLog::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\AuditLogNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuditLogCollection::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\AuditLogCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthPermissionResource::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\AuthPermissionResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthPermissionRolePaginatedCollection::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\AuthPermissionRolePaginatedCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthPermissionRoleResource::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\AuthPermissionRoleResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthRoleCollection::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\AuthRoleCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthRoleIdentityPaginatedCollection::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\AuthRoleIdentityPaginatedCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthRoleIdentityResource::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\AuthRoleIdentityResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthRoleResource::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\AuthRoleResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\BasePrice::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\BasePriceNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\BasePricePrice::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\BasePricePriceNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\Collection::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\CollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\CollectionPagination::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\CollectionPaginationNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\CustomerPricingProfile::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\CustomerPricingProfileNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\CustomerPricingProfilePrice::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\CustomerPricingProfilePriceNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\CustomerPricingProfileCollection::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\CustomerPricingProfileCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\Error::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\ErrorNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorReferencesItem::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\ErrorReferencesItemNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\ErrorResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\GetAuthPermissionCollectionResponse::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\GetAuthPermissionCollectionResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\Information::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\InformationNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\InformationResponse::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\InformationResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewAuthRoleResource::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\NewAuthRoleResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewCustomerPricingProfile::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\NewCustomerPricingProfileNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewCustomerPricingProfilePrice::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\NewCustomerPricingProfilePriceNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewOrganizationPricingProfile::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\NewOrganizationPricingProfileNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewOrganizationPricingProfilePrice::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\NewOrganizationPricingProfilePriceNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\OrganizationPricingProfile::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\OrganizationPricingProfileNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\OrganizationPricingProfilePrice::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\OrganizationPricingProfilePriceNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\OrganizationPricingProfileCollection::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\OrganizationPricingProfileCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PatchCustomerPricingProfile::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\PatchCustomerPricingProfileNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PatchCustomerPricingProfilePrice::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\PatchCustomerPricingProfilePriceNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PatchOrganizationPricingProfile::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\PatchOrganizationPricingProfileNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PatchOrganizationPricingProfilePrice::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\PatchOrganizationPricingProfilePriceNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\Price::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\PriceNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PriceCollection::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\PriceCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PriceProperty::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\PricePropertyNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\SteppedPrice::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\SteppedPriceNormalizer::class,
        
        \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\SteppedPricePriceProperty::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\SteppedPricePricePropertyNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
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
    public function getSupportedTypes(?string $format = null): array
    {
        return [
            
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuditLog::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuditLogCollection::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthPermissionResource::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthPermissionRolePaginatedCollection::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthPermissionRoleResource::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthRoleCollection::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthRoleIdentityPaginatedCollection::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthRoleIdentityResource::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthRoleResource::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\BasePrice::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\BasePricePrice::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\Collection::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\CollectionPagination::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\CustomerPricingProfile::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\CustomerPricingProfilePrice::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\CustomerPricingProfileCollection::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\Error::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorReferencesItem::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\GetAuthPermissionCollectionResponse::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\Information::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\InformationResponse::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewAuthRoleResource::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewCustomerPricingProfile::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewCustomerPricingProfilePrice::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewOrganizationPricingProfile::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewOrganizationPricingProfilePrice::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\OrganizationPricingProfile::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\OrganizationPricingProfilePrice::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\OrganizationPricingProfileCollection::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PatchCustomerPricingProfile::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PatchCustomerPricingProfilePrice::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PatchOrganizationPricingProfile::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PatchOrganizationPricingProfilePrice::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\Price::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PriceCollection::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PriceProperty::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\SteppedPrice::class => false,
            \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\SteppedPricePriceProperty::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}