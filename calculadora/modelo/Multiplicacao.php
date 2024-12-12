<?php

require_once("Calculadora.php");

class Multiplicacao extends Calculadora{
    public function calcular($na, $nb){
        return $na*$nb;
    }
}