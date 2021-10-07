<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model;

class PriceProperty
{
    /**
     * Minor Micro
     *
     * @var float|null
     */
    protected $minorMicro;
    /**
     * Currency
     *
     * @var string|null
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
        $this->minorMicro = $minorMicro;
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