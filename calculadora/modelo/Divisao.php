<?php

require_once("Calculadora.php");

class Divisao extends Calculadora{
    public function calcular($na, $nb){
        return $na/$nb;
    }
}