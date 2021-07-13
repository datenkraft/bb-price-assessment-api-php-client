<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model;

class NewOrganizationPricingProfile
{
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
     * Revenue Commission Percent (5 digits precision, 5 pre-decimal digits)
     *
     * @var float|null
     */
    protected $revenueCommissionPercent;
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