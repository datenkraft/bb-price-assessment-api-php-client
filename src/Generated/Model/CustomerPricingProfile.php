<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model;

class CustomerPricingProfile
{
    /**
     * Customer Pricing Profile Id
     *
     * @var string
     */
    protected $customerPricingProfileId;
    /**
     * Customer Id
     *
     * @var string
     */
    protected $customerId;
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
     * Customer Pricing Profile Id
     *
     * @return string
     */
    public function getCustomerPricingProfileId() : string
    {
        return $this->customerPricingProfileId;
    }
    /**
     * Customer Pricing Profile Id
     *
     * @param string $customerPricingProfileId
     *
     * @return self
     */
    public function setCustomerPricingProfileId(string $customerPricingProfileId) : self
    {
        $this->customerPricingProfileId = $customerPricingProfileId;
        return $this;
    }
    /**
     * Customer Id
     *
     * @return string
     */
    public function getCustomerId() : string
    {
        return $this->customerId;
    }
    /**
     * Customer Id
     *
     * @param string $customerId
     *
     * @return self
     */
    public function setCustomerId(string $customerId) : self
    {
        $this->customerId = $customerId;
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