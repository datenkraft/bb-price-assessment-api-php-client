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
     * Start date from when on the price is valid
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
    /**
     * Start date from when on the price is valid
     *
     * @return \DateTime
     */
    public function getValidFrom() : \DateTime
    {
        return $this->validFrom;
    }
    /**
     * Start date from when on the price is valid
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