<?php

$turmas = array();

for($i = 1; $i <= 4; $i++){
    $turma = array();
    $turma["curso"] = readline("O que essa turma cursa?");
    $turma["ano"] = readline("A qual ano essa turma pertence?");
    $turma["qtdAlunos"] = readline("qual a quantidade de alunos dessa turma?");

    array_push($turmas, $turma);
    echo "\n";
}

$ttlAlunos = 0;

foreach($turmas as $turma){
    $ttlAlunos = $ttlAlunos + $turma["qtdAlunos"];
}

echo "O total de alunos das 4 turmas é igual a:" . $ttlAlunos;