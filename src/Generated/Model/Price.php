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
     * Customer Id
     *
     * @var string
     */
    protected $customerId;
    /**
     * Price
     *
     * @var PricePrice|null
     */
    protected $price;
    /**
     * Percent (5 digits precision, 5 pre-decimal digits)
     *
     * @var float|null
     */
    protected $percent;
    /**
     * Stepped Prices
     *
     * @var SteppedPrice[]|null
     */
    protected $steppedPrices;
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
     * Price
     *
     * @return PricePrice|null
     */
    public function getPrice() : ?PricePrice
    {
        return $this->price;
    }
    /**
     * Price
     *
     * @param PricePrice|null $price
     *
     * @return self
     */
    public function setPrice(?PricePrice $price) : self
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
    /**
     * Stepped Prices
     *
     * @return SteppedPrice[]|null
     */
    public function getSteppedPrices() : ?array
    {
        return $this->steppedPrices;
    }
    /**
     * Stepped Prices
     *
     * @param SteppedPrice[]|null $steppedPrices
     *
     * @return self
     */
    public function setSteppedPrices(?array $steppedPrices) : self
    {
        $this->steppedPrices = $steppedPrices;
        return $this;
    }
}