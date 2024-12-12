<?php

require_once("Calculadora.php");

class Soma extends Calculadora{
    public function calcular($na, $nb){
        return $na+$nb;
    }
}