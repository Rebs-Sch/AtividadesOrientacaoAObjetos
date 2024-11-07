<?php

require_once("Espaco.php");

class Hotel extends Espaco{
    private int $numeroEstrelas;
    private bool $cafeIncluso;

    public function getDadosHotel(){
        
    }

    /**
     * Get the value of numeroEstrelas
     */
    public function getNumeroEstrelas(): int
    {
        return $this->numeroEstrelas;
    }

    /**
     * Set the value of numeroEstrelas
     */
    public function setNumeroEstrelas(int $numeroEstrelas): self
    {
        $this->numeroEstrelas = $numeroEstrelas;

        return $this;
    }

    /**
     * Get the value of cafeIncluso
     */
    public function isCafeIncluso(): bool
    {
        return $this->cafeIncluso;
    }

    /**
     * Set the value of cafeIncluso
     */
    public function setCafeIncluso(bool $cafeIncluso): self
    {
        $this->cafeIncluso = $cafeIncluso;

        return $this;
    }
}