<?php

require_once("Funcionario.php");

class Estagiario extends Funcionario{
    public function getCargo(){
        return "estagiário";
    }

    public function getSalario(){
        return $this->Sbase*0.8;
    }
}