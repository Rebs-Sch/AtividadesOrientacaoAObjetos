<?php

require_once("Veiculo.php");

class Onibus extends Veiculo{
    public function __construct(){
        $this->aluguel = 4.20;
    }

    public function getTipo(){
        return "Ônibus";
    }
}