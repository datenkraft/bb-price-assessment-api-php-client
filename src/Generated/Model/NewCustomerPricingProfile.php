<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model;

class NewCustomerPricingProfile
{
    /**
     * Customer Id
     *
     * @var string
     */
    protected $customerId;
    /**
     * SKU Code
     *
     * @var string
     */
    protected $skuCode;
    /**
     * Class CustomerPricingProfileResource
     *
     * @var PriceProperty
     */
    protected $price;
    /**
     * Percent (5 digits precision, 5 pre-decimal digits)
     *
     * @var float|null
     */
    protected $percent;
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
     * Percent (5 digits precision, 5 pre-decimal digits)
     *
     * @return float|null
     */
    public function getPercent() : ?float
    {
        return $this->percent;
    }
    /**
     * Percent (5 digits precision, 5 pre-decimal digits)
     *
     * @param float|null $percent
     *
     * @return self
     */
    public function setPercent(?float $percent) : self
    {
        $this->percent = $percent;
        return $this;
    }
}