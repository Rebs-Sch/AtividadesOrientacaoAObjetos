<?php

require_once("Produto.php");

class Computador extends Produto{
    private string $processador;
    private int $memoria;
    
    public function getDados(){
        parent::getDados();
        echo "Processador: ".$this->processador."\nMemoria: ".$this->memoria."GB\n";
    }

    /**
     * Set the value of processador
     */
    public function setProcessador(string $processador): self
    {
        $this->processador = $processador;

        return $this;
    }

    /**
     * Set the value of memoria
     */
    public function setMemoria(int $memoria): self
    {
        $this->memoria = $memoria;

        return $this;
    }
}