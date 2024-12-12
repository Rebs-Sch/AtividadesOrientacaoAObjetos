<?php

abstract class Veiculo {
    protected float $aluguel;
    protected int $quilometros;

    abstract public function getTipo();
    
    public function __toString(){
        return "O veículo ".$this->getTipo()." foi alugado por R$".$this->aluguel." e rodou ".$this->quilometros." quilometros com o custo total de R$".$this->valorTotal()."\n";
    }

    public function valorTotal(){
        return $this->aluguel*$this->quilometros;
    }


    public function getQuilometros(): int{
        return $this->quilometros;
    }
    public function setQuilometros(int $quilometros): self{
        $this->quilometros = $quilometros;

        return $this;
    }
}