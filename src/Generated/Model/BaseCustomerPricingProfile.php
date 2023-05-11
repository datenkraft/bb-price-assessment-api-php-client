<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model;

class BaseCustomerPricingProfile
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
     * Price
     *
     * @var PricePrice|null
     */
    protected $price;
    /**
    * Percent (5 digits precision, 5 pre-decimal digits) Used to calculate percentages of the transmitted
    values, e.g. to calculate commissions.
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
    * Start date from when on the price is valid. This price remains valid until a price with a more
    recent validFrom date is found.
    *
    * @var \DateTime
    */
    protected $validFrom;
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
    * Percent (5 digits precision, 5 pre-decimal digits) Used to calculate percentages of the transmitted
    values, e.g. to calculate commissions.
    *
    * @return float|null
    */
    public function getPercent() : ?float
    {
        return $this->percent;
    }
    /**
    * Percent (5 digits precision, 5 pre-decimal digits) Used to calculate percentages of the transmitted
    values, e.g. to calculate commissions.
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
    /**
    * Start date from when on the price is valid. This price remains valid until a price with a more
    recent validFrom date is found.
    *
    * @return \DateTime
    */
    public function getValidFrom() : \DateTime
    {
        return $this->validFrom;
    }
    /**
    * Start date from when on the price is valid. This price remains valid until a price with a more
    recent validFrom date is found.
    *
    * @param \DateTime $validFrom
    *
    * @return self
    */
    public function setValidFrom(\DateTime $validFrom) : self
    {
        $this->validFrom = $validFrom;
        return $this;
    }
}