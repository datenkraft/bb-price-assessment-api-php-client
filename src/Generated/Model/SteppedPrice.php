<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model;

class SteppedPrice
{
    /**
     * Valid from Quantity
     *
     * @var int
     */
    protected $validFromQuantity;
    /**
     * 
     *
     * @var PriceProperty
     */
    protected $price;
    /**
     * Valid from Quantity
     *
     * @return int
     */
    public function getValidFromQuantity() : int
    {
        return $this->validFromQuantity;
    }
    /**
     * Valid from Quantity
     *
     * @param int $validFromQuantity
     *
     * @return self
     */
    public function setValidFromQuantity(int $validFromQuantity) : self
    {
        $this->validFromQuantity = $validFromQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return PriceProperty
     */
    public function getPrice() : PriceProperty
    {
        return $this->price;
    }
    /**
     * 
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