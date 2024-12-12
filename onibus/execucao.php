<?php

require_once("modelo/Veiculo.php");
require_once("modelo/Carro.php");
require_once("modelo/MicroOnibus.php");
require_once("modelo/Onibus.php");
require_once("modelo/Van.php");

echo "Qual carro você deseja alugar?\n1- Carro\n2- Micro-Onibus\n3- Onibus\n4- Van\n";
$esc = readline();

$veiculo = null;

switch($esc){
    case 1:
        $veiculo = new Carro();
        break;
    case 2:
        $veiculo = new MicroOnibus();
        break;
    case 3:
        $veiculo = new Onibus();
        break;
    case 4:
        $veiculo = new Van();
        break;
}

$veiculo->setQuilometros(readline("Quantos quilometros serão rodados? "));
echo $veiculo;