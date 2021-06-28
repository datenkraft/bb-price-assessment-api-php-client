<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model;

class OrganizationPricingProfile
{
    /**
     * Organization Pricing Profile Id
     *
     * @var string
     */
    protected $organizationPricingProfileId;
    /**
     * Organization Id
     *
     * @var string
     */
    protected $organizationId;
    /**
     * SKU Id
     *
     * @var string
     */
    protected $skuId;
    /**
     * Price
     *
     * @var float|null
     */
    protected $price;
    /**
     * Currency
     *
     * @var string|null
     */
    protected $currency;
    /**
     * Organization Pricing Profile Id
     *
     * @return string
     */
    public function getOrganizationPricingProfileId() : string
    {
        return $this->organizationPricingProfileId;
    }
    /**
     * Organization Pricing Profile Id
     *
     * @param string $organizationPricingProfileId
     *
     * @return self
     */
    public function setOrganizationPricingProfileId(string $organizationPricingProfileId) : self
    {
        $this->organizationPricingProfileId = $organizationPricingProfileId;
        return $this;
    }
    /**
     * Organization Id
     *
     * @return string
     */
    public function getOrganizationId() : string
    {
        return $this->organizationId;
    }
    /**
     * Organization Id
     *
     * @param string $organizationId
     *
     * @return self
     */
    public function setOrganizationId(string $organizationId) : self
    {
        $this->organizationId = $organizationId;
        return $this;
    }
    /**
     * SKU Id
     *
     * @return string
     */
    public function getSkuId() : string
    {
        return $this->skuId;
    }
    /**
     * SKU Id
     *
     * @param string $skuId
     *
     * @return self
     */
    public function setSkuId(string $skuId) : self
    {
        $this->skuId = $skuId;
        return $this;
    }
    /**
     * Price
     *
     * @return float|null
     */
    public function getPrice() : ?float
    {
        return $this->price;
    }
    /**
     * Price
     *
     * @param float|null $price
     *
     * @return self
     */
    public function setPrice(?float $price) : self
    {
        $this->price = $price;
        return $this;
    }
    /**
     * Currency
     *
     * @return string|null
     */
    public function getCurrency() : ?string
    {
        return $this->currency;
    }
    /**
     * Currency
     *
     * @param string|null $currency
     *
     * @return self
     */
    public function setCurrency(?string $currency) : self
    {
        $this->currency = $currency;
        return $this;
    }
}