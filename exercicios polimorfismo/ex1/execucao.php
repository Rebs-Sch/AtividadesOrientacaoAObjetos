<?php

require_once("modelo/Balde.php");
require_once("modelo/Computador.php");
require_once("modelo/Livro.php");
require_once("modelo/Produto.php");

$produtos = array();

$produto = new Produto;
$produto->setDescricao("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa");
$produto->setUnidadeMedida("gramas");
array_push($produtos, $produto);

$livro = new Livro;
$livro->setDescricao("bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb");
$livro->setUnidadeMedida("páginas");
$livro->setAutor("joao");
array_push($produtos, $livro);

$computador = new Computador;
$computador->setDescricao("cccccccccccccccccccccccccccccccccccccccc");
$computador->setUnidadeMedida("quilo");
$computador->setProcessador("intel core i9-13900k");
$computador->setMemoria(16);
array_push($produtos, $computador);

$balde = new Balde;
$balde->setDescricao("ddddddddddddddddddddddddddddddddddd");
$balde->setUnidadeMedida("Litros");
$balde->setCapacidade(15);
array_push($produtos, $balde);

foreach($produtos as $p){
    $p->getDados();
}