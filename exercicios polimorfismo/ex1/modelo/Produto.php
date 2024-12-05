<?php

class Produto{
    protected string $descricao;
    protected string $unidadeMedida;

    public function getDados(){
        echo "Descrição do produto: ".$this->descricao."\nUnidade de medida: ".$this->unidadeMedida."\n";
    }

    /**
     * Set the value of unidadeMedida
     */
    public function setUnidadeMedida(string $unidadeMedida): self
    {
        $this->unidadeMedida = $unidadeMedida;

        return $this;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }
}