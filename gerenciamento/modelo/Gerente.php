<?php

require_once("Funcionario.php");

class Gerente extends Funcionario{
    public function getCargo(){
        return "gerente";
    }

    public function getSalario(){
        return $this->Sbase*4.5;
    }
}