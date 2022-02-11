<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model;

class SteppedPrice
{
    /**
     * Valid from Quantity
     *
     * @var float
     */
    protected $validFromQuantity;
    /**
     * Class CustomerPricingProfileResource
     *
     * @var PriceProperty
     */
    protected $price;
    /**
     * Valid from Quantity
     *
     * @return float
     */
    public function getValidFromQuantity() : float
    {
        return $this->validFromQuantity;
    }
    /**
     * Valid from Quantity
     *
     * @param float $validFromQuantity
     *
     * @return self
     */
    public function setValidFromQuantity(float $validFromQuantity) : self
    {
        $this->validFromQuantity = $validFromQuantity;
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
}