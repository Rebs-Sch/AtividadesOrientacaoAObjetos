<?php

class Midia{
    protected string $descricao;
    protected float $precoPago;
    protected string $tipo;

    public function getDados(){
        echo "Descrição: ".$this->descricao."\nPreco pago: ".$this->precoPago.".\n";
    }
    public function getTipo(){
        echo "Tipo indefinido.\n";
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Set the value of precoPago
     */
    public function setPrecoPago(float $precoPago): self
    {
        $this->precoPago = $precoPago;

        return $this;
    }
}