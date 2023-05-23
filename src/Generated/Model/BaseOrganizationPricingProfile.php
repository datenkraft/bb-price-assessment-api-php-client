<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model;

class BaseOrganizationPricingProfile extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
     * @var mixed[]|null
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
        $this->initialized['organizationId'] = true;
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
        $this->initialized['skuCode'] = true;
        $this->skuCode = $skuCode;
        return $this;
    }
    /**
     * Price
     *
     * @return mixed[]|null
     */
    public function getPrice() : ?iterable
    {
        return $this->price;
    }
    /**
     * Price
     *
     * @param mixed[]|null $price
     *
     * @return self
     */
    public function setPrice(?iterable $price) : self
    {
        $this->initialized['price'] = true;
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
        $this->initialized['percent'] = true;
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
        $this->initialized['steppedPrices'] = true;
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
        $this->initialized['validFrom'] = true;
        $this->validFrom = $validFrom;
        return $this;
    }
}