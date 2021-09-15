<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model;

class PriceProperty
{
    /**
     * Minor
     *
     * @var float|null
     */
    protected $minor;
    /**
     * Currency
     *
     * @var string|null
     */
    protected $currency;
    /**
     * Minor
     *
     * @return float|null
     */
    public function getMinor() : ?float
    {
        return $this->minor;
    }
    /**
     * Minor
     *
     * @param float|null $minor
     *
     * @return self
     */
    public function setMinor(?float $minor) : self
    {
        $this->minor = $minor;
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