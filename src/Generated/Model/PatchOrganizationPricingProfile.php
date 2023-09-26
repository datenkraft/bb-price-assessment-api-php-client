<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model;

class PatchOrganizationPricingProfile extends \ArrayObject
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
     * Price
     *
     * @var PatchOrganizationPricingProfilePrice|null
     */
    protected $price;
    /**
     * Percent (5 digits precision, 5 pre-decimal digits) Used to calculate percentages of the transmittedvalues, e.g. to calculate commissions.
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
     * Price
     *
     * @return PatchOrganizationPricingProfilePrice|null
     */
    public function getPrice() : ?PatchOrganizationPricingProfilePrice
    {
        return $this->price;
    }
    /**
     * Price
     *
     * @param PatchOrganizationPricingProfilePrice|null $price
     *
     * @return self
     */
    public function setPrice(?PatchOrganizationPricingProfilePrice $price) : self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * Percent (5 digits precision, 5 pre-decimal digits) Used to calculate percentages of the transmittedvalues, e.g. to calculate commissions.
     *
     * @return float|null
     */
    public function getPercent() : ?float
    {
        return $this->percent;
    }
    /**
     * Percent (5 digits precision, 5 pre-decimal digits) Used to calculate percentages of the transmittedvalues, e.g. to calculate commissions.
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
}