<?php

require_once("Veiculo.php");

class Carro extends Veiculo{
    public function __construct(){
        $this->aluguel = 1.50;
    }

    public function getTipo(){
        return "Carro";
    }
}