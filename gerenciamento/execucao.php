<?php

require_once("modelo/Desenvolvedor.php");
require_once("modelo/Estagiario.php");
require_once("modelo/Gerente.php");

$funcionario = null;

do{
    echo "\nQual funcionário você deseja cadastrar?\n1- Gerente\n2- Desenvolvedor\n3- Estagiário\n0- Sair";
    $esc = readline();

    switch($esc){
        case 1:
            $funcionario = new Gerente;
            break;

        case 2:
            $funcionario = new Desenvolvedor;
            break;

        case 3:
            $funcionario = new Estagiario;
            break;
            
        default:
            echo "Valor inválido";
            break;

        case 0:
            die;
    }

    if ($esc == 1 or $esc == 2 or $esc == 3) {
        $funcionario->setNome(readline("Insira o nome do funcionário: "));
        echo $funcionario;
    }

}while($esc != 0);