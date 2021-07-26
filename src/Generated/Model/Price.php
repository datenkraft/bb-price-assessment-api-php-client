<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model;

class Price
{
    /**
     * SKU Code
     *
     * @var string
     */
    protected $skuCode;
    /**
     * Organization Id
     *
     * @var string
     */
    protected $organizationId;
    /**
     * Class CustomerPricingProfileResource
     *
     * @var PriceProperty
     */
    protected $price;
    /**
     * Revenue Commission Percent (5 digits precision, 5 pre-decimal digits)
     *
     * @var float|null
     */
    protected $revenueCommissionPercent;
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
     * Class CustomerPricingProfileResource
     *
     * @return PriceProperty
     */
    public function getPrice() : PriceProperty
    {
        return $this->price;
    }
    /**
     * Class CustomerPricingProfileResource
     *
     * @param PriceProperty $price
     *
     * @return self
     */
    public function setPrice(PriceProperty $price) : self
    {
        $this->price = $price;
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