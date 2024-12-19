<?php

abstract class Funcionario{
    protected string $nome;
    protected float $Sbase = 1500;

    abstract function getSalario();

    abstract function getCargo();

    public function __toString(){
        return "O funcionário ".$this->nome." do cargo ".$this->getCargo()." possui salário de R$".$this->getSalario()."\n";
    }

    public function setNome(string $nome): self{
        $this->nome = $nome;

        return $this;
    }
}