<?php

abstract class Calculadora {
    protected float $numA;
    protected float $numB;

    abstract public function calcular($na, $nb);

    /**
     * Get the value of numA
     */
    public function getNumA(): float
    {
        return $this->numA;
    }

    /**
     * Set the value of numA
     */
    public function setNumA(float $numA): self
    {
        $this->numA = $numA;

        return $this;
    }

    /**
     * Get the value of numB
     */
    public function getNumB(): float
    {
        return $this->numB;
    }

    /**
     * Set the value of numB
     */
    public function setNumB(float $numB): self
    {
        $this->numB = $numB;

        return $this;
    }
}