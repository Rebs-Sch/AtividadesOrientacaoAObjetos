<?php

require_once("modelo/Fabricante.php");
require_once("modelo/Carro.php");

$fabianas = 
[new Fabricante("Volkswagem","VW"),
new Fabricante("Chevrolet","GM"),
new Fabricante("Fiat","F"),
new Fabricante("Renault","RN")
];

$carros = array();

do{
    echo"+-------------------------+\n|          MENU           |\n+-------------------------+\n| 1 - Cadastrar Carro     |\n| 2 - Excluir Carro       |\n| 3 - Listar Carros       |\n| 0 - Sair                |\n+-------------------------\n\n";

    $escolha = readline();

    switch ($escolha){
        case 1:
            $sigla;

            $carro = new Carro;
            $carro->setModelo(readline("Qual é o modelo do carro? "));
            $carro->setAnoFabricacao(readline("Qual é o ano de fabricação do carro? "));
            echo "\n";

            foreach($fabianas as $f){
                echo $f;
            }

            $sigla = readline("Dentre estas, qual é a fabricante do carro? ");

            foreach($fabianas as $f){
                if($f->getSigla() == $sigla){
                    $carro->setFabricante($f);
                }
            }
            array_push($carros, $carro);

            break;
        
        default:
            echo "Valor indefinido, digite outro número\n\n";
            break;
    }

}while($escolha != 0);