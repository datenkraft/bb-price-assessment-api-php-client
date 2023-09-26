<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model;

class NewOrganizationPricingProfilePrice extends \ArrayObject
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
     * Minor Micro
     *
     * @var float|null
     */
    protected $minorMicro;
    /**
     * Currency
     *
     * @var string
     */
    protected $currency;
    /**
     * Minor Micro
     *
     * @return float|null
     */
    public function getMinorMicro() : ?float
    {
        return $this->minorMicro;
    }
    /**
     * Minor Micro
     *
     * @param float|null $minorMicro
     *
     * @return self
     */
    public function setMinorMicro(?float $minorMicro) : self
    {
        $this->initialized['minorMicro'] = true;
        $this->minorMicro = $minorMicro;
        return $this;
    }
    /**
     * Currency
     *
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }
    /**
     * Currency
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency) : self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;
        return $this;
    }
}