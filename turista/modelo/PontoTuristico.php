<?php

require_once("Espaco.php");

class PontoTuristico extends Espaco{
    private int $visitaDuracao;

    public function getDadosPontoTuristico(){
        
    }

    /**
     * Get the value of visitaDuracao
     */
    public function getVisitaDuracao(): int
    {
        return $this->visitaDuracao;
    }

    /**
     * Set the value of visitaDuracao
     */
    public function setVisitaDuracao(int $visitaDuracao): self
    {
        $this->visitaDuracao = $visitaDuracao;

        return $this;
    }
}