<?php

require_once("modelo/Departamento.php");
require_once("modelo/Funcionario.php");

$funcionarios = array();

for ($i = 1; $i <= 5; $i++) { 
    $funcionario = new Funcionario;
    $funcionario->setNome(readline("Qual é o nome do ".$i."° funcionário?"))
    ->setCargo(readline("Qual é o cargo do ".$i."° funcionário?"))
    ->setSalario(readline("Qual é o salário do ".$i."° funcionário?"));

    $departamento= new Departamento;
    $departamento->setNome(readline("Qual é o nome do departamento do ".$i."° funcionário?"))
    ->setNumeroSala(readline("Qual é o número do departamento do ".$i."° funcionário?"));

    $funcionario->setDepto($departamento);

    array_push($funcionarios, $funcionario);

    echo"\n";
}

echo "\n";

foreach ($funcionarios as $i => $f) {
    echo "Nome: ".$f->getNome()."; ";
    echo "Cargo: ".$f->getCargo()."; ";
    echo "Salário: ".$f->getSalario()."; ";
    echo "Departamento: ".$f->getDepto()->getNome." - ".$f->getDepto()->getNumeroSala.".";
    echo "\n";
}