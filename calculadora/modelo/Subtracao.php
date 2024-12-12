<?php

require_once("Calculadora.php");

class Subtracao extends Calculadora{
    public function calcular($na, $nb){
        return $na-$nb;
    }
}