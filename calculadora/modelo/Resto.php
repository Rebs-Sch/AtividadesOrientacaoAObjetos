<?php

require_once("Calculadora.php");

class Resto extends Calculadora{
    public function calcular($na, $nb){
        return $na%$nb;
    }
}