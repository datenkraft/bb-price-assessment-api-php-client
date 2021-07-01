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
}