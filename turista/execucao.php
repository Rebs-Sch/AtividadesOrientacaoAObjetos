<?php

require_once("modelo/Espaco.php");
require_once("modelo/Hotel.php");
require_once("modelo/Restaurante.php");
require_once("modelo/PontoTuristico.php");

$espacos = array();

do{
    echo"\n
    +----------------------+\n
    |         Menu         |\n
    +----------------------+\n
    | 1- Cadastrar espaço  |\n
    | 2- Excluir espaço    |\n
    | 3- Listar espaços    |\n
    | 0- Sair              |\n
    +----------------------+\n";

    $esc = readline();

    switch($esc){
        case 1:
            echo "\nVocê deseja criar um:\n    1-Hotel\n   2-Restaurante\n    3-Ponto turistico";
            $opcao = readline();

            if($opcao == 1){
                $espaco = new Hotel;

                echo "\n";
                InformacoesBase($espaco);
                $espaco->setNumeroEstrelas(readline("Informe o número de estrelas do seu estabelecimento: "));
                
                echo "O seu estabelecimento tem café incluso?\n    1- Sim\n    0- não\n";
                $cafe = readline("");
                if($cafe == 1){
                    $espaco->setCafeIncluso(true);
                }else{
                    $espaco->setCafeIncluso(false);
                }

            }else if($opcao == 2){
                $espaco = new Restaurante;

                echo "\n";
                InformacoesBase($espaco);
                $espaco->setTipoComida(readline("Informe o tipo de comida que é servida no seu estabelecimento: "));

            }else if($opcao == 3){
                $espaco = new PontoTuristico;

                InformacoesBase($espaco);
                $espaco->setVisitaDuracao(readline("Informe a duração da visita no seu ponto turístico."));
            }else{
                echo "\nEstabelecimento inválido.\n";
            }     

        case 2:
            foreach ($espacos as $i => $espaco){
                echo $i+1 . $espaco->getNome(). "\n";
            }
            $excluir = readline()
    }

}while($esc !=0);

function InformacoesBase($espaco){
    $espaco->setNome(readline("Informe o nome do seu estabelecimento: "));
    $espaco->endereco(readline("Informe o endereco do seu estabelecimento: "));
}