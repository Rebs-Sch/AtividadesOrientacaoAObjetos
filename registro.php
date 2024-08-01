<?php

$galeria = array();

for ($i=0; $i < 3; $i++) {
    $pintura = array();
    $pintura ["autor"] = readline("Qual é o autor desta pintura?: ");
    $pintura ["estilo"] = readline("A que estilo artistico esta pintura pertence?: ");
    $pintura ["ano"] = readline("Em qual ano esta pintura foi confeccionada? ");
    $pintura ["valorEst"] = readline("Quanto vale, aproximadamente, esta pintura?");

    array_push($galeria, $pintura);
}

foreach ($galeria as $pintura) {
    echo implode("|", $pintura)."\n";
}
