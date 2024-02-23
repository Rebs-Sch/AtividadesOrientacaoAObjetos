<?php

function primo($num){

    $div = 0;

    for ($i = 1; $i < 10; $i++){
        if ($num % $i == 0){
            $div += 1;
        }
    }
    return $div;
}

do{

    $numD = readline ("Que número deseja descobrir se é primo ou não?  ");

    if (primo($numD) > 2)
    echo "esse número não é primo\n";
    else
        echo "esse número é primo\n";

}while($numD > 2);