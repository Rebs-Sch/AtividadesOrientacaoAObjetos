<?php

require_once("Veiculo.php");

class Van extends Veiculo{
    public function __construct(){
        $this->aluguel = 2.10;
    }

    public function getTipo(){
        return "Van";
    }
}