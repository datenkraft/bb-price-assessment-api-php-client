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
     * SKU Code
     *
     * @var string
     */
    protected $skuCode;
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
     * Revenue Commission Percent (5 digits precision, 5 pre-decimal digits)
     *
     * @var float|null
     */
    protected $revenueCommissionPercent;
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
     * SKU Code
     *
     * @return string
     */
    public function getSkuCode() : string
    {
        return $this->skuCode;
    }
    /**
     * SKU Code
     *
     * @param string $skuCode
     *
     * @return self
     */
    public function setSkuCode(string $skuCode) : self
    {
        $this->skuCode = $skuCode;
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
    /**
     * Revenue Commission Percent (5 digits precision, 5 pre-decimal digits)
     *
     * @return float|null
     */
    public function getRevenueCommissionPercent() : ?float
    {
        return $this->revenueCommissionPercent;
    }
    /**
     * Revenue Commission Percent (5 digits precision, 5 pre-decimal digits)
     *
     * @param float|null $revenueCommissionPercent
     *
     * @return self
     */
    public function setRevenueCommissionPercent(?float $revenueCommissionPercent) : self
    {
        $this->revenueCommissionPercent = $revenueCommissionPercent;
        return $this;
    }
}