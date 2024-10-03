<?php

require_once("modelo/Prato.php");
require_once("modelo/Pedido.php");

function listarPratos($ps){
    echo "\nEstes são os pratos: \n";

     foreach($ps as $p){
        echo $p;
     }
     echo "\n";
}

function retornaPrato($ps, $esc) {
    foreach($ps as $p) {
        if($esc == $p->getNumero())
            return $p;
    }
    return null;
}

$pratos = array();
$pedidos = array();

$p1 = new Prato(1, "Camarão à Milanesa", 110.0);
$p2 = new Prato(2, "Pizza Margherita", 80.0);
$p3 = new Prato(3, "Macarrão à Carbonara", 60.0);
$p4 = new Prato(4, "Bife à Parmegiana", 75.0);
$p5 = new Prato(5, "Risoto ao Funghi", 70.0);

array_push($pratos, $p1, $p2, $p3, $p4, $p5);

do{
    echo"+-------------------------+\n|          MENU           |\n+-------------------------+\n| 1 - Cadastrar pedido    |\n| 2 - Cancelar            |\n| 3 - Listar pedidos      |\n| 4 - Total de vendas     |\n| 0 - Sair                |\n+-------------------------+\n";

    $escolha = readline();

    echo "\n";

    switch ($escolha){
        case 1:
            $pedido = new Pedido;
            
            $pedido->setNomeCliente(readline("Qual é o seu nome? "));
            $pedido->setNomeGarcom(readline("Qual é o nome do Garçom que te atendeu? "));

            $prato = null;
            while($prato == null) {
                listarPratos($pratos);
                
                $pEsc = readline("Qual o número do prato que escolheu? ");
                $prato = retornaPrato($pratos, $pEsc);
            }
            echo "\n";

            $pedido->setPrato($prato);
            array_push($pedidos, $pedido);

            break;
        
        case 2: 
            foreach($pedidos as $i=>$p){
                echo $i+1 ." - ".$p;
            }
            
            if(count($pedidos) > 0){
                $n = readline("Qual é o número do pedido que deseja excluir? ");
                if ($n > 0 and $n<=count($pedidos)){
                    array_splice($pedidos, $n-1, 1);
                }
            }
            echo "\n";
            
            break;

        case 3:
            foreach($pedidos as $p){
                echo $p->firula();
            }
            break;

        case 4:
            echo"\nO total de pedidos feitos é: ".count($pedidos).". \n";
            break;

        case 0:
            die;

        default:
            echo "\nEscolha invállida...";
            break;
    }
}while($escolha != 0);