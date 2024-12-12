<?php

require_once("modelo/Soma.php");
require_once("modelo/Subtracao.php");
require_once("modelo/Multiplicacao.php");
require_once("modelo/Divisao.php");
require_once("modelo/Resto.php");

$numA = readline("Qual é o primeiro número? ");
$numB = readline("Qual é o segundo número? ");

do{

        echo "E qual operação você deseja fazer?\n1- Soma\n2- Subtracao\n3- Multiplicacao\n4- Divisao\n5- Resto\n";
        $esc = readline();

        switch($esc){
            case 1:
                $calculo = new Soma;
                break;
            case 2:
                $calculo = new Subtracao;
                break;
            case 3:
                $calculo = new Multiplicacao;
                break;
            case 4:
                $calculo = new Divisao;
                break;
            case 5:
                $calculo = new Resto;
                break;
            default:
                echo "valor inválido.\n";
                break;
        }
        
    if($calculo){
        echo $calculo->calcular($numA, $numB)."\n";
    }
    
    $numA = readline("Qual é o primeiro número? ");
    $numB = readline("Qual é o segundo número? ");
}while($numA != 0 and $numB != 0);