<?php

require_once("Produto.php");

class Balde extends Produto{
    private float $capacidade;
    
    public function getDados(){
        parent::getDados();
        echo "Capacidade: ".$this->capacidade." litros\n";
    }

    /**
     * Set the value of capacidade
     */
    public function setCapacidade(float $capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }
}