<?php

require_once("modelo/Midia.php");
require_once("modelo/Cd.php");
require_once("modelo/Dvd.php");

$midias = array();

for($i=0; $i < 5; $i++){ 
    $tipo= readline("Qual é o tipo de mídia que deseja cadastrar? 1-DVD 2-CD");

    if($tipo = 1){
        $midia = new Dvd;
        $midia->setDescricao(readline("Qual é a descrição da mídia que deseja inserir?"));
        $midia->setPrecoPago(readline("E qual é o preço?"));
        array_push($midias, $midia);
        
        echo "\n";
    }else if($tipo = 2){
        $midia = new Cd;
        $midia->setDescricao(readline("Qual é a descrição da mídia que deseja inserir?"));
        $midia->setPrecoPago(readline("E qual é o preço?"));
        array_push($midias, $midia);
        
        echo "\n";
    }else{
        echo "Tipo indefinido\n";
    }
}

foreach($midias as $m){
    $m->getDados();
    $m->getTipo();
}