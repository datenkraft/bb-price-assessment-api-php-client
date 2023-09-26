<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model;

class SteppedPrice extends \ArrayObject
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
     * Valid from Quantity
     *
     * @var int
     */
    protected $validFromQuantity;
    /**
     * 
     *
     * @var SteppedPricePriceProperty
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
        $this->initialized['validFromQuantity'] = true;
        $this->validFromQuantity = $validFromQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return SteppedPricePriceProperty
     */
    public function getPrice() : SteppedPricePriceProperty
    {
        return $this->price;
    }
    /**
     * 
     *
     * @param SteppedPricePriceProperty $price
     *
     * @return self
     */
    public function setPrice(SteppedPricePriceProperty $price) : self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
}