<?php

$multiplicando = readline ("Qual é o número a ser multiplicado?");
$multiplicador = readline ("Que número o multiplicará?");


for ($i = 0; $i < $multiplicador; $i++){
    $resultado += $multiplicando;
}

echo "\nO resultado da conta é: $resultado \n";
