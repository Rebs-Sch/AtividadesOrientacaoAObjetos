<?php
require_once("Veiculo.php");

class MicroOnibus extends Veiculo{
    public function __construct(){
        $this->aluguel = 2.75;
    }

    public function getTipo(){
        return "Micro-onibus";
    }
}