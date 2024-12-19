<?php

require_once("Funcionario.php");

class Desenvolvedor extends Funcionario{
    public function getCargo(){
        return "desenvolvedor";
    }

    public function getSalario(){
        return $this->Sbase*2.3;
    }
}